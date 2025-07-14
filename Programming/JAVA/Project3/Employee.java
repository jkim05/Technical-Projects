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

public abstract class Employee {
   private String name;
   private String date;
   private int expenseType;
   public double total = 0;
   public static final int MAX_EMPLOYEE = 10;
   
   public Employee (String name, String date, int expenseType ,double total) {
      if (name == null || name.equals("")) {
         throw new IllegalArgumentException("Please enter a name");
      }
      if (date == null || date.equals("")) {
         throw new IllegalArgumentException("Please enter a date");
      }
      if (expenseType > 4 || expenseType < 1) {
         throw new IllegalArgumentException("Please enter expense type:\n"
   				+ " 1.Airfare \n 2.Hotel 2\n 3. Excellent\n 4.Personal Car");
      }
      this.name = name;
      this.date = date;
      this.expenseType = expenseType;
   }
      
      
   public String getName() { return this.name; }
   public String getDate() { return this.name; }
   public String getExpenseType() { return this.name; }
   public String getTotal() { return this.name; }
   
   public void setName(String name) {
      if (name == null || name.equals("")) {
         throw new IllegalArgumentException("Please enter a name");
      }
      this.name = name;
   }
   
   public void setDate(String date) {
      if (date == null || date.equals("")) {
         throw new IllegalArgumentException("Please enter a date");
         }         
       this.date = date;
       }
   
   public void setExpenseType(int expenseType) {
            if (expenseType > 4 || expenseType < 1) {
               throw new IllegalArgumentException("Please enter expense type:\n"
   				+ " 1.Airfare \n 2.Hotel 2\n 3. Excellent\n 4.Personal Car");
      }
      this.expenseType = expenseType;
	}
   
      
   
   public String toString() {
      return this.getName() + "\n" + this.getDate() + "\n" + this.getExpenseType() + "\n" + this.getTotal();
   }
}
