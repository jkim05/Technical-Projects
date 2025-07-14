
/*
   Name: Jefferson T. Kim
   Date: 05/01/2022
   Course/Section: IT 206.2D1
   Assignment: 8 

   */

public class Exam {
   private String examType;
   private int examScore;
   private static int numPassing;
   private static int numExams;
   private static int numFailing;
   private Candidate[] roster;
   public static final int MAX_EXAM_ID = 2;
   public static final int RAW_PASSING_C1 = 500;
   public static final int RAW_PASSING_C2 = 600;
   public static final int RAW_PASSING_C3 = 600;
   public static final int RAW_PASSING_C4 = 600;
   public static final int RAW_PASSING_I1 = 400;
   public static final int RAW_PASSING_I2 = 500;
   public static final int RAW_PASSING_I3 = 600;
   public static final int RAW_PASSING_I4 = 600;

   public Exam(String examType, int examScore) {
      if (examType == null || examType.equals("")) {
         throw new IllegalArgumentException("Please enter the type of exam you are taking");
         }
      if (examScore < 0) {
         throw new IllegalArgumentException("Please enter the score you recieved");
         }
      this.examType = examType;
      this.examScore = examScore;
      ++numExams;
      }
    
    public String getExamType() { return this.examType; }
    public int getExamScore() { return this.examScore; }
    public static int getTotal() { return numExams; }
    public static int getPassing() { return numPassing; }
    public static int getFailing() { return numFailing; }
    
    
    public void setExamID (String examType) {
     if(examType != "C1" || examType !=  "C2" || examType !="C3" || examType != "C4" ||examType != "I1" || examType != "I2" || examType != "I3" || examType != "I4") {
         throw new IllegalArgumentException("please enter an exam between C1, C2, C3, C4, I1, I2, I3, I4");
         }
      this.examType = examType;
      }
    
    public void setScore (int examScore) {
      if(examScore > 0) {
         throw new IllegalArgumentException("please enter a positive score");
         }
      this.examScore = examScore;
     }
     
      
      public void calculateScores() {
         if(examType == "C1") {
            examScore = RAW_PASSING_C1;
            ++numPassing;
            }
         if(examType == "C2") {
            examScore = RAW_PASSING_C2;
            ++numPassing;
            }
         if(examType == "C3") {
            examScore = RAW_PASSING_C3;
            ++numPassing;
            }
         if(examType == "C4") {
            examScore = RAW_PASSING_C4;
            ++numPassing;
            }
         if(examType == "I1") {
            examScore = RAW_PASSING_I1;
            ++numPassing;
            }
          if(examType == "I2") {
             examScore = RAW_PASSING_I2;
            ++numPassing;
            }
          if(examType == "I3") {
             examScore = RAW_PASSING_I3;
            ++numPassing;
            }
           if(examType == "I4") {
            examScore = RAW_PASSING_I4;
            ++numPassing;
            }
            else {
               ++numFailing;
            }
         }
         
         public String toString() {
            return "Testing Center"
            + "\nTotal Exams Taken: " + getTotal()
            + "\nTotal Passing: " + getPassing()
            + "\nTotal Failing: " + getFailing();
            }
       }