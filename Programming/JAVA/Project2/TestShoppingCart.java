import javax.swing.JOptionPane;

public class TestShoppingCart {
   public static void main(String[] args) {
      Item a1 = new Item("Cheese", 3.50, 3.00, 0.00, 0.00);
      Item a2 = new Item("Bread", 5.00, 0.00, 0.00, 6.00);
      WarrentyItem b1 = new WarrentyItem("Ipod", 200.00, 0.00, 0.00, 0.00 , 12, 0.00); 
      WarrentyItem b2 = new WarrentyItem("TV", 400, 0.00, 0.00, 360, 36, 0.00);
      
      TestShoppingCart cart = new TestShoppingCart();
      
      cart.addToCart(a1);
   }
}
      