/*
   Name: Jefferson T. Kim
   Date: 09/05/2021
   Course/Section: IT 206.DL2
   Assignment: Lab 1
  
   Description: This program is designed to provide the GMU
   Used Car Dealership an application to handle inventory.
   
  */
import javax.swing.JOptionPane;

public class Car {

   private String make;
   private String model;
   private String color;
   private double baseCost;
   double finalCost;
   
   public void Display() {
      JOptionPane.showMessageDialog(null, "Final Cost is: " + finalCost);
      }
   
   public void setMake(String make) {
      this.make = make;
      }
      
   public String getMake() {
      return this.make;
      }
      
   public void setModel(String model) {
      this.model = model;
      }
   
   public String getModel() {
      return this.model;
      }
      
   public void setColor(String color) {
      this.make = make;
      }
      
   public String getColor() {
      return this.color;
      }
      
   public void setbaseCost(double baseCost) {
      this.baseCost = baseCost;
      }
      
   public double getbaseCost() {
      return this.baseCost;
      }
  
   public double calculateFinalCost(double baseCost) {
      double tax = baseCost * 1.05;
      double finalCost = tax + baseCost;
      return this.finalCost;
      }
}
   
   