/*
   Name: Jefferson T. Kim
   Date: 09/26/2021
   Course/Section: IT 206.2D2
   Assignment: Lab 11
  
   Description: This program is designed to track students within a university. Each student is identified 
   by their name and faculty advisor. Each faculty advisor is identified by their name, department,
   and maximum number of students they can advise.
   
   */


public abstract class Advisor extends Person {
   private String department;
   public static final int MAX_STUDENTS = 300;
   
   public Advisor (String name, String department) {
      super(name);
      if (department == null || department.equals("")) {
         throw new IllegalArgumentException("Please enter a name");
         }
      
      this.department = department;
      }
      
      
   public String getDepartment() { return this.department; }

   public String toString() {
      return super.toString()
         +"\nDepartment: " + this.getDepartment();
         }
}