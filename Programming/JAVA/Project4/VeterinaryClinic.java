import javax.swing.JOptionPane;

public class VeterinaryClinic {
   public static void main(String[] args) {
      final int MAX_NUM_ANIMALS = 10;
  
      Animal[] patients = new Animal[MAX_NUM_ANIMALS];
      admit(patients);

      displayAll(patients);
   }

   private static void admit(Animal[] patients) {
      JOptionPane.showMessageDialog(null, "Adding animals to the list of patients");
      patients[0] = new Cat("Felix", 12, false, 4.5);
      patients[1] = new Bird("Polly", 3, 8.3);
   }

   private static void displayAll(Animal[] patients) {
 
      String output = "**Patient Summary**\n\n" +

      /** START: BLOCK #4
       * Write a loop that will append the object details and noise of each animal to the output string
      */
       "\nName: " + super.getName() +
       "\nAge: " + super.getAge() +
       "\nHealth Rating: " + super.getHealthRating() +
       "\nNoise: "+ this.getNoise();
       
      
      
      /** END: BLOCK #4 **/

     
      JOptionPane.showMessageDialog(null, output);
   }
}