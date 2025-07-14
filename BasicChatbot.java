import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.net.URI;
import java.net.URISyntaxException;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class BasicChatbot extends JFrame implements ActionListener {

    private JTextField questionField;
    private JButton searchButton;
    private JButton cancelButton;
    private JTextArea resultsArea;

    public BasicChatbot() {
        setTitle("Basic Chatbot");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLayout(new BorderLayout());

        JPanel inputPanel = new JPanel(new FlowLayout(FlowLayout.LEFT));
        JLabel promptLabel = new JLabel("How can I help you?");
        questionField = new JTextField(30);
        searchButton = new JButton("Search");
        cancelButton = new JButton("Cancel");

        searchButton.addActionListener(this);
        cancelButton.addActionListener(this);

        inputPanel.add(promptLabel);
        inputPanel.add(questionField);
        inputPanel.add(searchButton);
        inputPanel.add(cancelButton);

        resultsArea = new JTextArea(10, 40);
        resultsArea.setEditable(false);
        JScrollPane scrollPane = new JScrollPane(resultsArea);

        add(inputPanel, BorderLayout.NORTH);
        add(scrollPane, BorderLayout.CENTER);

        pack();
        setLocationRelativeTo(null); // Center the window
        setVisible(true);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if (e.getSource() == searchButton) {
            String question = questionField.getText().trim();
            if (!question.isEmpty()) {
                resultsArea.setText("Searching Google for: " + question + "\n");
                List<String> topListings = searchGoogle(question);
                if (!topListings.isEmpty()) {
                    resultsArea.append("--- Top 3 Google Listings ---\n");
                    for (int i = 0; i < Math.min(3, topListings.size()); i++) {
                        resultsArea.append((i + 1) + ". " + topListings.get(i) + "\n");
                    }
                } else {
                    resultsArea.append("No relevant results found.\n");
                }
            } else {
                resultsArea.setText("Please enter a question.\n");
            }
        } else if (e.getSource() == cancelButton) {
            questionField.setText("");
            resultsArea.setText("");
        }
    }

    private List<String> searchGoogle(String query) {
        List<String> results = new ArrayList<>();
        String googleSearchURL = "https://www.google.com/search?q=" + query.replace(" ", "+");

        try {
            java.net.URL url = new java.net.URL(googleSearchURL);
            java.net.URLConnection connection = url.openConnection();
            connection.setRequestProperty("User-Agent", "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3"); // Mimic a browser

            try (java.io.BufferedReader reader = new java.io.BufferedReader(new java.io.InputStreamReader(connection.getInputStream()))) {
                String line;
                Pattern urlPattern = Pattern.compile("<a href=\"/url\\?q=(.*?)\"", Pattern.CASE_INSENSITIVE);
                int count = 0;
                while ((line = reader.readLine()) != null && count < 5) { // Read a bit more than needed to ensure 3 good results
                    Matcher matcher = urlPattern.matcher(line);
                    if (matcher.find()) {
                        String extractedURL = matcher.group(1);
                        if (extractedURL.startsWith("http") && !extractedURL.contains("google.com")) { // Filter out Google links
                            results.add(extractedURL);
                            count++;
                        }
                    }
                }
            }
        } catch (IOException e) {
            resultsArea.append("Error accessing Google: " + e.getMessage() + "\n");
        }
        return results.subList(0, Math.min(3, results.size())); // Return the top 3
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(BasicChatbot::new);
    }
}