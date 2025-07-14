
/*
   Name: Jefferson T. Kim
   Date: 05/01/2022
   Course/Section: IT 206.2D1
   Assignment: Lab 11 
  
   Description: This program is designed to track students within a university. Each student is identified 
   by their name and faculty advisor. Each faculty advisor is identified by their name, department,
   and maximum number of students they can advise.
   
   */
   
import javax.swing.JOptionPane;
public class implementationUniversity {
   public static void main (String[] args) {
   Student student1 = new Student("Jefferson Kim", "Laura Tauriello");
   Advisor advisor1 = new Advisor("Laura Tauriello", "Information Technology");
   University university1 = new University("George Mason University", advisor1, student1);
   
   JOptionPane.showMessageDialog(null, university1.toString());


   }
}