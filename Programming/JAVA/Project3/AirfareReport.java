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

public class AirfareReport extends Employee {
   private String city;
   private double ticketPrice;
   private double cost = 0;
   public static final double BAGGAGE_FEE = 30.00;
   
   public AirfareReport (String name, String date, int expenseType ,double total, String city, double ticketPrice, double cost) {
      super(name, date, expenseType, total);
      if (city == null || city.equals("")) {
         throw new IllegalArgumentException("enter the city desintation");
         }
      if (ticketPrice < 0) {
         throw new IllegalArgumentException("enter the ticket price");
         }
      this.city = city;
      this.ticketPrice = ticketPrice;
      }
      
      public String getCity() { return this.city; }
      public double getTicketPrice() { return this.ticketPrice; }
      
      public void setCity(String city) {
         if (city == null || city.equals("")) {
         throw new IllegalArgumentException("enter the city desintation");
         }
         this.city = city;
      }
      public void setTicketPrice(double ticketPrice) {
          if (ticketPrice < 0) {
         throw new IllegalArgumentException("enter the ticket price");
         }
         this.ticketPrice = ticketPrice;
      }
      
      public void getCost(double ticketPrice, double BAGGAGE_FEE) {
         double cost = ticketPrice + BAGGAGE_FEE;
         total += cost;
         }
      
     public String toString() {
      return this.getCity() + " " + this.getTicketPrice() + " " + this.getTotal();
   }
}