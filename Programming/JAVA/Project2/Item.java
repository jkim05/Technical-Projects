/**
   Name: Jefferson Kim
   Date: 04/02/2022
   Course/Section: IT 206-2D1
   Assignment: Assignment 6
  
   Description: This design is created using an object-oriented solution to add, 
   remove, and track the subtotal of items in a shopping cart. The cart must have 
   a subtotal of no greater than 1500.00 with a maximum of 50 items. Each item must
   contain name, price, and competitor prices (only created when a name and price
   has input. Warranty items follow similar functions as an item, but the duration
   of the warranty must be tracked (only created when name, price, and duration is
   provided). The duration will be stored in months (12, 24, or 36). The cost of
   the warranty is found by multiplying the duration by 4. 
   
*/
import javax.swing.JOptionPane;
import java.util.ArrayList;


public class Item {
   private String name;
   private double price;
   private double cost;
   private double aPrice;
   private double tPrice;
   private double wPrice;
   private double savings;
   private double total;
   public static int numberOfItems = 0;
   public static final int MAX_ITEMS = 50;
   public static final double MAX_COST = 1500.00;
   
   public Item(String name, double price, double aPrice, double tPrice, double wPrice) {
      if (name == null) {
         throw new IllegalArgumentException("Please enter a name for the item");
      }
      if (price < 0) {
         throw new IllegalArgumentException("Please enter a price");
      }
      this.name = name;
      this.price = price;
      this.aPrice = aPrice;
      this.tPrice = tPrice;
      this.wPrice = wPrice;
      ++numberOfItems;
   }
   
   public String getName() { return this.name; }
   public double getPrice() { return this.price; }
   public double getCost() { return this.cost; }
   public double getAmazon() { return this.aPrice; }
   public double getTarget() { return this.tPrice; }
   public double getWalmart() { return this.wPrice; }
   public static int getTotalItems() { return numberOfItems; }
   public double getSavings() { return this.savings; }
   
   public boolean validateName(String name) {
      if(name.length() > 3 && Character.isLetter(name.charAt(0)) && Character.isLetter(name.charAt(1)) && Character.isLetter(name.charAt(2))) {
         this.name = name;
         return true;
      }
      else {
         return false;
      }      
   }
   
   public void setPrice(double price) {
      if(price > 0) {
         this.price = price;
         price += total;
         total = cost;
         }
      } 
   
   public void setCost(double cost) {
      if(cost > MAX_COST) {
         throw new IllegalArgumentException("Max cost has been reached");
         }
      }
      
    public void setAmazon(double aPrice) {
      if(aPrice > 0) {
         this.aPrice = aPrice;
         }
     }
     
    public void setTarget(double tPrice) {
      if(tPrice > 0) {
         this.tPrice = tPrice;
         }
     }
     
     public void setWalmart(double wPrice) {
      if(wPrice > 0) {
         this.wPrice = wPrice;
         }
     }
     
     public void setNumberOfItems(int numberOfItems) {
      if(numberOfItems > MAX_ITEMS) {
         throw new IllegalArgumentException("Max amount of items have been entered");
         }
      }
     
     public void calculateSavings(double price, double aPrice, double wPrice, double tPrice) {
      if (price > aPrice) {
         savings = price - aPrice;
      }
      if (price > tPrice) {
         savings = price - tPrice;
      }
      if (price > wPrice) {
         savings = price - wPrice;
      }
     }
     
     public String toString() {
      return this.getName() + " " + this.getPrice() + " " + this.getCost() + " " + this.getAmazon() + " " + this.getWalmart() + " " + this.getTarget() + " " + this.getTotalItems();
      }
}