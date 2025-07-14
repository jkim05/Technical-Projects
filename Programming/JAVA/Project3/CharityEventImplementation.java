/*
   Name: Jefferson T. Kim
   Date: 02/11/2022
   Course/Section: IT 206.2D1
   Assignment: Assignment 2 (Solution Implementation)
  
  
   Description: This solution design will have the ability to track ticket sales and the amount raised for these events. 
   Tickets are sold by groups per table with a maximum of 8 available seats.

   •	Allow the user to enter: First name of the fund-raising event (“2022 Spring Fund Raiser”)
   •	Ask how many tables are available for the event. (Max table capacity = 50).
   •	Ask the user to enter the number of tickets being purchased by a group.
   •	2 types of tickets – adult = $100, kids = $50
   •	Model one charity event.
   
   */
   
import javax.swing.JOptionPane;
public class CharityEventImplementation {
   public static void main(String[] args) { 
     CharityEvent charityEvent1 = getCharityEvent();
    }
    
    public static CharityEvent getCharityEvent() {
      CharityEvent aCharityEvent = new CharityEvent("Spring", 35, 5, 3);
      
     boolean nameSet;
     do {
      nameSet = aCharityEvent.setName(JOptionPane.showInputDialog("Enter the name for the event: "));
      if (!nameSet) {
         JOptionPane.showMessageDialog(null, "You must enter a name");
         }
      } while(!nameSet);
      
      boolean capacitySet = false;
      do {
         try {
           capacitySet = aCharityEvent.setCapacity(Integer.parseInt(JOptionPane.showInputDialog("Enter the capacity of the charity event (50 is default): ")));
            capacitySet = true;
          }
          catch (NumberFormatException e) {
         JOptionPane.showMessageDialog(null, "Please enter a number");
         }
         } while (!capacitySet);
      
      boolean adultTixSet = false;
      do {
         try {
            adultTixSet = aCharityEvent.setAdultTix(Integer.parseInt(JOptionPane.showInputDialog("Enter the number of adult tickets: ")));
            }
          catch (NumberFormatException e) {
            JOptionPane.showMessageDialog(null, "Please enter a number");
            }
          } while(!adultTixSet);
      
      boolean childTixSet = false;
      do {
         try {
            childTixSet = aCharityEvent.setChildTix(Integer.parseInt(JOptionPane.showInputDialog("Enter the number of child tickets: ")));
            }
          catch (NumberFormatException e) {
            JOptionPane.showMessageDialog(null, "Please enter a number");
            }
          } while(!childTixSet);
      
   return aCharityEvent;
}
   

}