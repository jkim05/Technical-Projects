
/*
   Name: Jefferson T. Kim
   Date: 05/01/2022
   Course/Section: IT 206.2D1
   Assignment: 8
  
   */
   
import javax.swing.JOptionPane;
public class TestingCenterImplemenation {
   public static void main (String[] args) {
   Candidate candidate1 = new Candidate("Jefferson Kim", "jkim316@gmu.edu", "asgard road", "Virginia", "20155", "703333333");
   Employer employer1 = new Employer("Google", "800000000", 0);
   Exam exam1 = new Exam("C1", 500);
   
   JOptionPane.showMessageDialog(null, exam1.toString());


   }
}