/*
   Name: Jefferson T. Kim
   Date: 02/05/2022
   Course/Section: IT 206.2D1
   Assignment: Lab 1
  
   Description: Working at the GMU RAC Complex, you need to create an object-oriented application 
   to support revenue earned from personal training. To start, you create a detailed UML diagram 
   that helps to plan your solution. Based on the detailed UML diagram below, translate the class
   definition into a .java file, making sure it compiles.
   
   */
   
import javax.swing.JOptionPane;

public class PersonalTrainer {

   private String firstName;
   private String lastName;
   private double salary;
   private int numOfClients;
   double finalCost;
   
   public PersonalTrainer( String firstName, String lastName, double salary, int numOfClients) {
      this.firstName = firstName;
      this.lastName = lastName;
      this.salary = salary;
      this.numOfClients = numOfClients;
      }
      
   
   public String getfirstName() { return this.firstName; }
   public String getlastName() { return this.lastName; }
   public double getSalary() { return this.salary; }
   
   
      public void Display() {
      JOptionPane.showMessageDialog(null, "Final Cost is: " + finalCost);
   }
      
  
   public double calculateFinalCost(int numOfClients) {
      double finalCost = (numOfClients * 195.00) - salary;
      return this.finalCost;
   }
}