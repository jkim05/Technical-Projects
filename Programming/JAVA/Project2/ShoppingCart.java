

import javax.swing.JOptionPane;

public class ShoppingCart {
   public static void main(String[] args) {
      
     do { 
      ShoppingCart cart = addItem();
    } while (JOptionPane.showInputDialog("Would you like to add more?").equalsIgnoreCase("yes"));
      }
  
  
  public static ShoppingCart addItem() {
   ShoppingCart cart = new ShoppingCart();
   
   boolean setName = false;
   do {
      try {
       cart.validateName(JOptionPane.showInputDialog("Enter the name of the item"));
       setName = true;
       }
       catch(IllegalArgumentException e) {
         JOptionPane.showMessageDialog(null, "Please enter a name for the item");
       }
    } while(!setName);
    
    boolean priceSet = false;
    do {
      try {
         cart.setPrice(Double.parseDouble(JOptionPane.showInputDialog("Enter the total stock of the product")));
         priceSet = true;
         }
      catch(NumberFormatException e) {
         JOptionPane.showMessageDialog(null, "please enter the total stock of the product");
         }
      } while(!priceSet);
    
    boolean priceAset = false;
    do {
      try {
         setAmazon(Double.parseDouble(JOptionPane.showInputDialog("Enter the item name")));
         priceAset = true;
         }
       catch(IllegalArgumentException e) {
         JOptionPane.showMessageDialog(null, "please enter a cost above 0");
         }
      } while(!priceAset);
      
    boolean priceWset = false;
    do {
      try {
         cart.setWalmart(Double.parseDouble(JOptionPane.showInputDialog("Enter the item name")));
         priceWset = true;
         }
       catch(IllegalArgumentException e) {
         JOptionPane.showMessageDialog(null, "please enter a cost above 0");
         }
      } while(!priceWset);
     
    boolean priceTset = false;
    do {
      try {
         cart.setTarget(Double.parseDouble(JOptionPane.showInputDialog("Enter the item name")));
         priceTset = true;
         }
       catch(IllegalArgumentException e) {
         JOptionPane.showMessageDialog(null, "please enter a cost above 0");
         }
      } while(!priceTset);
      
      return cart;
    }
}
      
      