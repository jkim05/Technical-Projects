/*
   Name: Jefferson T. Kim
   Date: 09/26/2021
   Course/Section: IT 206.2D2
   Assignment: Lab 11
  
   Description: This program is designed to track students within a university. Each student is identified 
   by their name and faculty advisor. Each faculty advisor is identified by their name, department,
   and maximum number of students they can advise.
   
   */


public abstract class Person {
   private String name;
   
   public Person (String name) {
      if (name == null || name.equals("")) {
         throw new IllegalArgumentException("Please enter a name");
         }
      
      this.name = name;
      }
      
      
   public String getName() { return this.name; }
   
   public void setName(String name) {
      if (name == null || name.equals("")) {
         throw new IllegalArgumentException("Please enter a name");
         }
      
      this.name = name;
      }
   
   public String toString() {
      return this.getName();
      }
}

   
   