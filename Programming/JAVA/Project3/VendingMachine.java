/*
   Name: Jefferson T. Kim
   Date: 03/06/2022
   Course/Section: IT 206.2D1
   Assignment: Assignment 4 
  
  
   Description: This is designed to improve my java skills through the implementation of a vending machine program. 
   The vending machine has a maximum of 30 slots. Each slot is identified by a slot ID (this must be two characters 
   long – first character as uppercase and the last as a digit), item Name, item Price, amount in inventory, and 
   amount sold. Each slot should track how many slots are in use and the total cost earned (item price * amount sold).
   
   */
   
import javax.swing.JOptionPane;

public class VendingMachine {
   public String slotID;
   private String itemName;
   private double itemPrice;
   private int totalStock;
   public static int slotTotal;
   private static int totalSold;
   private static double totalRev;
   private static final int MAX_SLOT = 30;
   
   public VendingMachine() {
      ++slotTotal;
   }
   
   public VendingMachine(String slotID, int totalStock, int slotTotal, String itemName, double itemPrice) {
      this();
      if (slotID == null || slotID.equals("")) {
         throw new IllegalArgumentException("Slot ID must not be blank.");
         }
      if (slotTotal > MAX_SLOT) {
         throw new IllegalArgumentException("Max 30 slots.");
         }
      if (itemName == null || itemName.equals("")) {
         throw new IllegalArgumentException("Item name must not be blank.");
         }
      if (itemPrice >= 0) {
         throw new IllegalArgumentException("Item price must not be blank.");
         }
      if (totalStock >= 0) {
         throw new IllegalArgumentException("Please enter the stock");
      }
    }
    
    public String getSlotID() { return this.slotID; }
    public int getTotalStock() { return this.totalStock; }
    public String getItemName() { return this.itemName; }
    public double getItemPrice() { return this.itemPrice; }
    public static int getSlotTotal() { return slotTotal; }
    public static int getTotalSold() { return totalSold; }
    public double getTotalRev() { return this.totalRev; }
    
    
    public void setSlotID(String slotID) {
      if(validateSlotID(slotID)){
         this.slotID = slotID;
      }
      else {
         throw new IllegalArgumentException("Please enter a slot ID with 2 charachters long - first is uppercase and second is a digit");
      }
    }
    
    public void setTotalStock(int totalStock) {
      if(totalStock > 0 || totalStock < 40) {
         this.totalStock = totalStock;
         }
         else {
            throw new IllegalArgumentException("please enter a stock between 0-40");
         }
    }
    
    public void setItemName(String itemName) {
      if(itemName != null) {
         this.itemName = itemName;
       }
       else {
         throw new IllegalArgumentException(" ");
       }
     }
     
     public void setItemPrice(double itemPrice) {
      if(itemPrice > 0){
         this.itemPrice = itemPrice;
      }
      else {
         throw new IllegalArgumentException("Please enter a price above $0");
       }
     }
     
     public boolean validateSlotID(String slotID) {
      char search;
      boolean number = false;
      boolean letter = false;
      for (int i = 0; i < slotID.length(); i++) {
         search = slotID.charAt(i);
      if (Character.isDigit(slotID.charAt(i))) {
         number = true;
         }
      else if (Character.isUpperCase(slotID.charAt(i))) {
         letter = true;
         }
      if(number && letter)
         return true;
         }
         return false;
      }

     
     public void calculateRevenue() {
      totalRev += this.getTotalSold() * this.getItemPrice();
     } 
   
    public String toString() {
      return "Report " +
            "\nSlot ID: " + this.getSlotID() +
            "\nItem Name: " + this.getItemName() +
            "\nItem Price: " + this.getItemPrice() +
            "\nTotal Stock: " + this.getTotalStock() +
            "\nTotal Sold: " + this.getTotalSold() +
            "\nTotal Earned: " + this.getTotalRev();
            }
}