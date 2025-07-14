/*
   Name: Jefferson T. Kim
   Date: 02/11/2022
   Course/Section: IT 206.2D1
   Assignment: Assignment 2 (Solution Implementation)
  
  
   Description: This solution design will have the ability to track ticket sales and the amount raised for these events. 
   Tickets are sold by groups per table with a maximum of 8 available seats.

   •	Allow the user to enter: First name of the fund-raising event (“2022 Spring Fund Raiser”)
   •	Ask how many tables are available for the event. (Max table capacity = 50).
   •	Ask the user to enter the number of tickets being purchased by a group.
   •	2 types of tickets – adult = $100, kids = $50
   •	Model one charity event.
   
   */

public class CharityEvent {
   private String name;
   private int capacity;
   private int adultTix;
   private int childTix;
   private int totalTix;
   private static int totalSold;
   private double totalRev;
   public int MAX_CAPACITY = capacity * 8;
   public static final double A_PRICE = 100.00;
   public static final double C_PRICE = 50.00;
   
   
   public CharityEvent(String name, int capacity, int adultTix, int childTix) {
      this.name = name;
      this.capacity = capacity;
      this.adultTix = adultTix;
      this.childTix = childTix;
   }
   
   public String getName() { return this.name; }
   public int getCapacity() { return this.capacity; }
   public int getAdultTix() { return this.adultTix; }
   public int getChildTix() { return this.childTix; }
   public int getTotalTix() { return this.totalTix; }
   public int getTotalSold() { return this.totalSold; }
   public double getTotalRev() { return this.totalRev; }
   
   public boolean setName(String name) {
      if (!name.equals("")) {
         this.name = name;
         return true;
      }
      else {
         return false;
      }
    }
    
    public boolean setCapacity(int capacity) {
      if (capacity > 0 || capacity < 50) {
         this.capacity = capacity;
         return true;
      }
      else {
        return false;
      }
   }
   
   public boolean setAdultTix(int adultTix) {
      if (adultTix > 0 || adultTix < MAX_CAPACITY) {
         this.adultTix = adultTix;
         totalSold++;
         return true;
         }
         else {
            return false;      
      }
    }
     
    public boolean setChildTix(int ChildTix) {
      if (childTix > 0 || childTix < MAX_CAPACITY) {
         this.childTix = childTix;
         totalSold++;
         return true;
         }
         else {
           return false;
        }      
     }
     
     public boolean sellEvent() {
      if(this.getTotalTix() > 0) {
         return this.setCapacity(this.getTotalTix() - 1);
         }
         else {
            return false;
         }
      }
     
     public double CalculateTotalRevenue (int childTix, int adultTix) {
      double adultRev = adultTix * A_PRICE;
      double childRev = childTix * C_PRICE;
      totalRev = adultRev * childRev;
      return totalRev;
      }
      
     public String toString() {
      return "Event: " + this.getName() + "\n" +
                  "Tickets avaivlable " + this.MAX_CAPACITY + "\n" +
                  "Adult tickets sold: " + this.getAdultTix() + "\n" +
                  "Child tickets sold: " + this.getChildTix() + "\n" +
                  "Total tickets sold: " + this.getTotalSold() + "\n" +
                  "Total revenue: " + this.getTotalRev();
      }      
}
     
         
      
   