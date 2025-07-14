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

public class VendingMachineImplementation {
   public static void main(String[] args) { 
     do {
      VendingMachine aVendingMachine = addVendingMachine();
    } while (JOptionPane.showInputDialog("Enter a slot within the machine").equalsIgnoreCase("yes"));
  
  }
  
  public static VendingMachine addVendingMachine() {
   VendingMachine aVendingMachine = new VendingMachine();
   
   boolean setSlot = false;
   do {
      try {
       aVendingMachine.setSlotID(JOptionPane.showInputDialog("Enter the slotID"));
       setSlot = true;
       }
       catch(IllegalArgumentException e) {
         JOptionPane.showMessageDialog(null, "Please enter a slot ID");
       }
    } while(!setSlot);
    
    boolean totalSet = false;
    do {
      try {
         aVendingMachine.setTotalStock(Integer.parseInt(JOptionPane.showInputDialog("Enter the total stock of the product")));
         totalSet = true;
         }
      catch(NumberFormatException e) {
         JOptionPane.showMessageDialog(null, "please enter the total stock of the product");
         }
      } while(!totalSet);
    
    boolean nameSet = false;
    do {
      try {
         aVendingMachine.setItemName(JOptionPane.showInputDialog("Enter the item name"));
         nameSet = true;
         }
       catch(IllegalArgumentException e) {
         JOptionPane.showMessageDialog(null, "please enter the item name");
         }
      } while(!nameSet);
    
    boolean priceSet = false;
    do {
      try { 
        aVendingMachine.setItemPrice(Double.parseDouble(JOptionPane.showInputDialog("Enter the price for the item")));
        priceSet = true;
       }
       catch (NumberFormatException e) {
         JOptionPane.showMessageDialog(null, "enter a iterm price");
         }
      } while(!priceSet);
      
      return aVendingMachine;
    }
    
    public static void printReport(double totalRev, String slotID, int totalSlot){
      JOptionPane.showMessageDialog(null, "Vending Machine Report \n \n"
         + "Slot ID: " + slotID 
         + "\nTotal Revenue: " + totalRev +
         "\nTotal Slots: " + totalSlot);
      }
}