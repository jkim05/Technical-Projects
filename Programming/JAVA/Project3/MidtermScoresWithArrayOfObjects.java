import javax.swing.JOptionPane;

public class MidtermScores {
   public static void main(String[] args) {
      Score[] fallSemester = new Score[] {
         new Score("Joey" , 78.5),
         new Score("Lisa" , 96,7),
         new Score("Jayne" , 42.5),
         new Score("Mark" , 86.5),
         new Score("Chris" , 42.5)
      };
         for (int i = 0; i <= 5; i++) {
            if(score >= 50) {
            JOptionPane.showMessageDialog(null, "The lowest midterm score was " +Score[i]);
            }
      }
   }
}