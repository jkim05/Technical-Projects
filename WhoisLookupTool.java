import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.Socket;

public class WhoisLookupTool {

    private static final String DEFAULT_WHOIS_SERVER = "whois.iana.org";
    private static final int WHOIS_PORT = 43;

    public static void main(String[] args) {
        if (args.length != 1) {
            System.out.println("Usage: java WhoisLookupTool <domain_or_ip>");
            System.out.println("Example: java WhoisLookupTool google.com");
            System.out.println("Example: java WhoisLookupTool 8.8.8.8");
            return;
        }

        String query = args[0];
        String whoisServer = DEFAULT_WHOIS_SERVER;

        try (Socket socket = new Socket(whoisServer, WHOIS_PORT);
             BufferedReader reader = new BufferedReader(new InputStreamReader(socket.getInputStream()));
             java.io.PrintWriter writer = new java.io.PrintWriter(socket.getOutputStream(), true)) {

            writer.println(query);
            String line;
            System.out.println("--- WHOIS Information for " + query + " ---");
            while ((line = reader.readLine()) != null) {
                System.out.println(line);
                if (line.startsWith("whois:")) {
                    whoisServer = line.substring(line.indexOf(":") + 1).trim();
                    if (!whoisServer.isEmpty() && !whoisServer.equals(DEFAULT_WHOIS_SERVER)) {
                        // Reconnect to the specific whois server for the domain
                        try (Socket redirectSocket = new Socket(whoisServer, WHOIS_PORT);
                             BufferedReader redirectReader = new BufferedReader(new InputStreamReader(redirectSocket.getInputStream()));
                             java.io.PrintWriter redirectWriter = new java.io.PrintWriter(redirectSocket.getOutputStream(), true)) {
                            System.out.println("\n--- Redirected WHOIS Query to " + whoisServer + " ---");
                            redirectWriter.println(query);
                            String redirectLine;
                            while ((redirectLine = redirectReader.readLine()) != null) {
                                System.out.println(redirectLine);
                            }
                            break; // Stop after following the first redirect
                        } catch (IOException redirectException) {
                            System.err.println("Error connecting to redirected WHOIS server: " + whoisServer + " - " + redirectException.getMessage());
                        }
                    }
                }
            }
            System.out.println("--- End of WHOIS Information ---");

        } catch (IOException e) {
            System.err.println("Error querying WHOIS server: " + e.getMessage());
        }
    }
}