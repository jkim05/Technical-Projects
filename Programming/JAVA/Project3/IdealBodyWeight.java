/*
   Name: Jefferson T. Kim
   Date: 09/12/2021
   Course/Section: IT 206.DL2
   Assignment: Lab 2
  
   Description: This application is used to help people
   reach their ideal body weight. Utilizing a single person
   to serve as a model for how this program works.
   
  */

public class IdealBodyWeight {

   private String name;
   private int currentWeight;
   private int idealWeight;
   
   public void Person(String name, int currentWeight, int idealWeight) {
      this.name = name;
      this.currentWeight = currentWeight;
      this.idealWeight = idealWeight;
      }
      
   // Accessors and Mutators for all variables //
   public void setName(String name) {
      this.name = name;
      }
      
   public String getName() {
      return (this.name);
      }
      
    public void setCurrentWeight(int currentWeight) {
      this.currentWeight = currentWeight;
      }
      
   public int getCurrentWeight() {
         int currentWeight = 200;
      return (this.currentWeight);
      }
      
   public void setIdealWeight(int idealWeight) {
      this.idealWeight = idealWeight;
      }
      
   public int getIdealWeight() {
        int idealWeight = 190;
      return (this.idealWeight);
      }
    /*
   public boolean isInShape(int currentWeight, idealWeight ) {
      if(currentWeight.equals(this.idealWeight)) {
         return true;
         } else {
            return false;
            }
      }
      */
}   
   