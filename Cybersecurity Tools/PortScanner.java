import java.net.Socket;
import java.net.InetSocketAddress;
import java.io.IOException;

public class PortScanner {

    public static void main(String[] args) {
        if (args.length != 2) {
            System.out.println("Usage: java PortScanner <target_host> <start_port-end_port>");
            System.out.println("Example: java PortScanner scanme.nmap.org 1-1000");
            return;
        }

        String host = args[0];
        String[] portRange = args[1].split("-");

        if (portRange.length != 2) {
            System.out.println("Invalid port range format. Use <start_port>-<end_port>");
            return;
        }

        try {
            int startPort = Integer.parseInt(portRange[0]);
            int endPort = Integer.parseInt(portRange[1]);

            System.out.println("Scanning ports on " + host + " from " + startPort + " to " + endPort + "...");

            for (int port = startPort; port <= endPort; port++) {
                if (isPortOpen(host, port, 200)) { // Timeout of 200 milliseconds
                    System.out.println("Port " + port + " is open");
                }
            }

            System.out.println("Port scan complete.");

        } catch (NumberFormatException e) {
            System.out.println("Invalid port number(s).");
        }
    }

    /**
     * Checks if a specific port is open on a given host within a specified timeout.
     *
     * @param host    The target host (IP address or hostname).
     * @param port    The port number to check.
     * @param timeout The timeout in milliseconds for the connection attempt.
     * @return True if the port is open, false otherwise.
     */
    public static boolean isPortOpen(String host, int port, int timeout) {
        try (Socket socket = new Socket()) {
            socket.connect(new InetSocketAddress(host, port), timeout);
            return true;
        } catch (IOException e) {
            return false; // Port is closed or the connection timed out
        }
    }
}