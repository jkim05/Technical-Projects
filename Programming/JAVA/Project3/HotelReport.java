/*
   Name: Jefferson T. Kim
   Date: 11/28/2021
   Course/Section: IT 206.2D2
   Assignment: Assignment 8
  
   Description: This design is created using an object-oriented solution to help 
   track employee travel expenses. The company of 10 employees required that this 
   solution allows for the ability to track their travel expenses such as airfare, 
   hotel, car rental or driving their own cars.
   
   */
   
public class HotelReport extends Employee {
   private double hotelRate;
   private int numNights;
   public static final double HOTEL_TAX = 0.05;
   
   
   public HotelReport (String name, String date, int expenseType ,double total, 
   double hotelRate, int numNights) {
      super(name, date, expenseType, total);
      if (hotelRate < 0) {
         throw new IllegalArgumentException("enter the hotel rate");
         }
      if (numNights < 0) {
         throw new IllegalArgumentException("enter the numnber of nights stayed");
         }
      this.hotelRate = hotelRate;
      this.numNights = numNights;
      }
      
      public double getHotelRate() { return this.hotelRate; }
      public int getNumNights() { return this.numNights; }
      
      public void setHotelRate (double hotelRate) {
          if (hotelRate < 0) {
         throw new IllegalArgumentException("enter the hotel rate");
         }
         this.hotelRate = hotelRate;
         }
     
     public void setNumNights (int numNights) {
      if (numNights < 0) {
         throw new IllegalArgumentException("enter the numnber of nights stayed");
         }
         this.numNights = numNights;
         }

      
      public void getCost(double hotelRate, int numNights, double HOTEL_TAX) {
         double rate = hotelRate * numNights;
         double tax = rate * HOTEL_TAX;
         double cost = rate + tax;
         total += cost;
         }
      
     public String toString() {
      return this.getHotelRate() + " " + this.getNumNights() + " " + this.getTotal();
   }
}