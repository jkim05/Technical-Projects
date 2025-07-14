//*********************************************************
/*
   Name: Jefferson T. Kim
   Date: 11/07/2021
   Course/Section: IT 206.DL2
   Assignment: Lab 9 
/*
 * In this file, do the following things:
 * 1) Modify the class so that it inherits from Product
 * 2) Create a constructor that takes in a book title and book cost
 */
 

public class Book extends Product {
   private String title;
   private double cost;
   
   public void Book(String title, double cost) {
      if (title == null || title.equals("")) {
         throw new IllegalArgumentException("Enter a book title");
         }
      if (cost < 0) {
         throw new IllegalArgumentException("Enter a cost above 0");
         }
         this.title = title;
         this.cost = cost;
   }
   
   public String getTitle() { return this.title; }
   public double getCost() { return this.cost; }
}

//*********************************************************
