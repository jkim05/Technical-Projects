// Lab 1 question // 

public class Textbook {
   private String name;
   private double wholesaleCost;
   
   public String getName() { return this.name; }
   public double getWholesaleCost() { return this.wholesaleCost; }
   
   public void setName (String name) {
      this.name = name;
   }
   
   public boolean setWholesaleCost (double wholesaleCost) {
      final double MIN_COST = 0.00;
      final double MAX_COST = 99.99;
      
      if (wholesaleCost >= MIN_COST && wholesaleCost <= MAX_COST) {
         this.wholesaleCost = wholesaleCost;
         return true;
      }
      else {
         return false;
      }
   }
   
   private double purchaseCost() {
      final double TAX = 0.06;
      
      return this.getWholesaleCost() * (1 + TAX);
    }
    
    public String toString() {
      return "Name: " + this.getName()
      + "\nRetail Cost: " + this.purchaseCost();
    }
 }
