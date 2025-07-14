/*
   Name: Jefferson T. Kim
   Date: 09/26/2021
   Course/Section: IT 206.2D2
   Assignment: Lab 11
  
   Description: This program is designed to track students within a university. Each student is identified 
   by their name and faculty advisor. Each faculty advisor is identified by their name, department,
   and maximum number of students they can advise.
   
   */


public abstract class Student extends Person {
   private String advisor;
   
   public Student (String name, String advisor) {
      super(name);
      if (advisor == null || advisor.equals("")) {
         throw new IllegalArgumentException("Please provide the advisor");
         }
      
      this.advisor = advisor;
      }
      
      
   public String getAdvisor() { return this.advisor; }
   
      
    public String toString() {
      return super.toString()
         + "\nUniversity Advisor: " + this.getAdvisor();
      }
}