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
public class PersonalCarReport extends Employee {
   private double distance; 
   public static final double PERSONAL_RATE = 1.05;

   
   public PersonalCarReport (String name, String date, int expenseType ,double total, 
  double distance) {
      super(name, date, expenseType, total);
      if (distance < 0) {
         throw new IllegalArgumentException("enter the distance of travel");
         }
      this.distance = distance;      }
      
      
      public double getDistance() { return this.distance; }
      
      public void getCost(double distance, double PERSONAL_FEE) {
         double cost = distance * PERSONAL_FEE;
         total += cost;
         }
      
     public String toString() {
      return this.getDistance() + " " + this.getTotal();
   }
}