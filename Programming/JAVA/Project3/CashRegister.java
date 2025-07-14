import javax.swing.JOptionPane;

public class CashRefister {
   public static void main(String[] args) {
      CashRegister c1 = new CashRegister();
      CashRegister c2 = new CashRegister();
      CashRegister c3 = c1;
      
      c1.setTotal(25.00);
      c2.setTotal(50.00);
      c3.setTotal(75.00);
      
      JOptionPane.showMessageDialog(null, String.format("$%.2f", c1.getTotal()));
      }
 }
      