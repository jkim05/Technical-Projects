import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;

public class PacketSniffer {

    public static void main(String[] args) {
        if (args.length != 1) {
            System.out.println("Usage: java PacketSniffer <packet_data_file>");
            System.out.println("Example: java PacketSniffer captured_packets.txt");
            System.out.println("Note: The packet data file should have each packet's basic info on a new line.");
            return;
        }

        String packetFile = args[0];

        try (BufferedReader reader = new BufferedReader(new FileReader(packetFile))) {
            String line;
            System.out.println("--- Captured Packets ---");
            while ((line = reader.readLine()) != null) {
                // Simulate basic packet information display
                System.out.println("Captured Packet: " + line);
                // In a real sniffer, you'd parse this line to extract source/dest IP, ports, etc.
            }
            System.out.println("--- End of Capture ---");

        } catch (IOException e) {
            System.err.println("Error reading packet data file: " + e.getMessage());
        }
    }
}