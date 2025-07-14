import java.net.InetAddress;
import java.net.UnknownHostException;

public class DNSLookupTool {

    public static void main(String[] args) {
        if (args.length != 1) {
            System.out.println("Usage: java DNSLookupTool <hostname>");
            System.out.println("Example: java DNSLookupTool google.com");
            return;
        }

        String hostname = args[0];

        try {
            InetAddress[] addresses = InetAddress.getAllByName(hostname);

            System.out.println("DNS Records for " + hostname + ":");
            for (InetAddress address : addresses) {
                System.out.println("  " + address.getHostAddress());
            }

        } catch (UnknownHostException e) {
            System.err.println("Host not found: " + hostname);
        }
    }
}