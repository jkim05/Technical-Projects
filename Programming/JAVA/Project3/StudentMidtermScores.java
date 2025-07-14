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


public class StudentMidtermScores {
   public String studentName;
   public double score;
   public static final double MIN_SCORE = 0.00;
   public static final double MAX_SCORE = 100.00;
   
   public StudentMidtermScores(String studentName, double score) {
      if(studentName == null || studentName.equals("")) {
         throw new IllegalArgumentException("A score must be provided");
      }
      
      if(score < MIN_SCORE || score > MAX_SCORE) {
         throw new IllegalArgumentException( "Score must be between "
        + MIN_SCORE + " and " + MAX_SCORE);
      }
      
      this.studentName = studentName;
      this.score = score;
   }
   
   public String getStudent() { return this.studentName; }
   public double getScore() { return this.score; }
   
   public void setStudentName(String studentName) {
      if (studentName == null || studentName.equals("")) {
         throw new IllegalArgumentException("Student names may be altered");
         }
         this.studentName = studentName;
       }
   
   public void setScore (double score) {
      if (score < MIN_SCORE) {
         throw new IllegalArgumentException("Please enter a value above " + MIN_SCORE);
      }
      this.score = score;  
   }
}

