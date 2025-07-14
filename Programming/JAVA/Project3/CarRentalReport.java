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
public class CarRentalReport extends Employee {
   private double dailyRate;
   private int numDays;
   private double gasExpense;
   
   
   public CarRentalReport (String name, String date, int expenseType ,double total, 
   double dailyRate, int numDays, double gasExpense) {
      super(name, date, expenseType, total);
      if (dailyRate < 0) {
         throw new IllegalArgumentException("enter the daily rate");
         }
      if (numDays < 0) {
         throw new IllegalArgumentException("enter the numnber of days rented");
         }
      if (gasExpense < 0) {
         throw new IllegalArgumentException("enter the gas expense");
         }
      this.dailyRate = dailyRate;
      this.numDays = numDays;
      this.gasExpense = gasExpense;
      }
      
      public double getDailyRate() { return this.dailyRate; }
      public int getNumDays() { return this.numDays; }
      public double getGasExpense() { return this.gasExpense; }
      
      public void setDailyRate (double dailyRate) {
          if (dailyRate < 0) {
         throw new IllegalArgumentException("enter the daily rate");
         }
         this.dailyRate = dailyRate;
         }
     
     public void setNumDays (int numDays) {
      if (numDays < 0) {
         throw new IllegalArgumentException("enter the numnber of days rented");
         }
         this.numDays = numDays;
         }
      
      public void setGasExpense (double gasExpense) {
               if (gasExpense < 0) {
         throw new IllegalArgumentException("enter the gas expense");
         }
         this.gasExpense = gasExpense;
         }

      
      public void getCost(double dailyRate, int numDays, double gasExpense ) {
         double rate = dailyRate * numDays;
         double cost = rate + gasExpense;
         total += cost;
         }
      
     public String toString() {
      return this.getDailyRate() + " " + this.getNumDays() + " " + this.getTotal();
   }
}