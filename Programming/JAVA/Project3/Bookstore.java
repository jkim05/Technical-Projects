// line 10 - JOptionPane.showMessageDialog(null, a Textbook.wholesaleCost); -- doesn't compile -- below is the correct anser//
// correct line for output of 0.0 - JOptionPane.showMessageDialog(null, aTextbook.getWholesaleCost()); //
// aTextbook.setName("Big Java"); - legal/allowed //

import javax.swing.JOptionPane;

public class Bookstore {
   public static void main (String[] args) {
      Textbook aTextbook = new Textbook();
      aTextbook.setName("Big Java");
      }
}