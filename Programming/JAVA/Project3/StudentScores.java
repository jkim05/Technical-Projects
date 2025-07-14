/*
   Name: Jefferson T. Kim
   Date: 01/29/2022
   Course/Section: IT 206 2D1/DL1
   Assignment: Lab 0
  
   Description: 
      Starting a brand new term, you decide you want to make a good impression on your instructor. 
   To do this, you want to create an application that helps process midterm exam scores, letting 
   the instructor know which student(s) earned the lowest score so the instructor can suggest some 
   extra help resources.


   To begin, initialize two parallel arrays (hardcoding the values):

      -  Names: Joey, Lisa, Karen, Mark, Christopher, etc.
      -  Scores: 78.5, 97.0, 42.5, 86.5, 42.5, etc.
      
   Once you have initialized the parallel arrays with values, display the 
   lowest score and the student(s) with that score. Note more than one student 
   may be “tied” for the lowest score. Your application should handle this.


   An example run of the program, assuming usage of the data identified above is:
 

      Example Run:
      The lowest midterm score was 42.5.


      The student(s) that earned this score:
      Karen
      Christopher


The student(s) may benefit from extra help.   


Note: Make sure your application uses good design practices, such as using methods other than main().

     Create an Score Data Defintion Class
*/

import javax.swing.JOptionPane;

public class StudentScores {
   public static void main(String[] args) {
       String[] names = {"Joey", "Lisa", "Karen", "Mark", "Christopher"};
       final double LOW_SCORE = 50.0;
       
       double[] score = new double[5];
         score[0] = 78.5;
         score[1] = 97.0;
         score[2] = 42.5;
         score[3] = 86.5;
         score[4] = 42.5;
         
         for (int i = 0; i <= names.length; i++) {
               if(score[i] < LOW_SCORE) {
                  JOptionPane.showMessageDialog(null, "The lowest midterm score was " +score[i]);
                  JOptionPane.showMessageDialog(null, "The student(s) that earned this score: " 
                  + names[i] + "\n" + "This student(s) may benefit from extra help");
                  
            }     
      }

   }
}
