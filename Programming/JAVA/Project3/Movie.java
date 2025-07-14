/*
   Name: Jefferson T. Kim
   Date: 10/10/2021
   Course/Section: IT 206.DL2
   Assignment: Lab 5
  
   Description: You are working at the Johnson Center Cinema. 
   The theatre must keep track of the titles and lengths of all movies shown 
   in the theatre. You may assume no two movies will have the same length. 
   The theatre manager wants to know which movie is the shortest, so she can 
   consider offering a discount for the movie. At any given time, the theatre 
   can have up to 5 movies playing. Create an object oriented solution that allows 
   the theatre manager to enter up to 5 movies playing. An error message will display 
   when the manager tries to enter more than 5 movies. Display a summary of all 
   of the movie titles, the number of movies entered, and the title and length 
   of the shortest movie.
   
  */
  

public class Movie {
   private String title;
   private int length;
   private static int numMovies = 0;
  
   public Movie() {
      this("", 0);
   }
  
   public Movie(String title, int length) {
      this.title = title;
      this.length = length;
      ++numMovies;
   }
  
   public String getTitle() { return this.title; }
   public int getLength() { return this.length; }
   public static int getNumMovies() { return numMovies; }
  
   public void setTitle(String title) {
      this.title = title;
   }
  
   public boolean setLength(int length) {
      if (length > 0) {
         this.length = length;
         return true;
      }
      else {
         return false;
      }
   }
}


import javax.swing.JOptionPane;

public class TheatreIncomplete {
   public static void main(String[] args) {
      final int NUM_MOVIES = 5;
      Movie[] movies = new Movie[NUM_MOVIES];

      int x = 0;
      do {
          
         /** START: BLOCK #1
          * In the block below, enter code that will first check if there is room to enter another movie in the
          * movies array. If there is, call the add the movie to the array using the inputMovie() method.
          * Else, if there is not, display an error message to the user letting them know the maximum nubmer of movies
          * that can be entered.
          * Hint: To check the number of movies already entered, use the getNumMovies() static method
          */
        try {
            Room = Integer.parseInt(JOptionPane.showInputDialog("Enter the room number: "));
            }
            catch (NumberFormatException e) {
               Room = -1;
            }
          isRoomSet = inputMovie(Room);
          if (!isRoomSet) {
            JOptionPane.showMessageDialog(null, "Sorry the room you entered is not available");
            }
          if (Room < 0 || Room > 5)
            JOptionPane.showMessageDialog(null, "Please enter a movie between 1-5");
            
        
         /** END: BLOCK #1 **/        

      }
      while (JOptionPane.showConfirmDialog(null, "Enter another movie?") == JOptionPane.YES_OPTION);

      Movie shortestMovie = getShortest(movies);
      printSummary(movies, shortestMovie);
   }

   private static Movie inputMovie() {
      Movie aMovie = new Movie();
     
      aMovie.setTitle(JOptionPane.showInputDialog(null, "Enter the title for movie " + Movie.getNumMovies() + ": "));
     
      int length;
      boolean isLengthSet = false;
      do {
         try {
            length = Integer.parseInt(JOptionPane.showInputDialog("Enter the length of " + aMovie.getTitle() + " in (minutes)"));
         }
         catch (NumberFormatException e) {
            length = -1;
         }
         isLengthSet = aMovie.setLength(length);
         if (!isLengthSet) {
            JOptionPane.showMessageDialog(null, "Sorry, you entered an invalid movie length. Please try again.");
         }
      } while(!isLengthSet);
     
      return aMovie;
   }
  
   private static Movie getShortest(Movie[] movies) {
      Movie aMovie = null;
     
      if (movies.length > 0) {
        
         /** START: BLOCK #2
          * In the block below, enter code that will find the movie object containing the shortest length
          * Hint: You will need to loop through all movies to find the shortest
          */
         
         for (int s=n-1; s > 0; i--){
            if(Movie[i] == shortestMovie)
               shortestMovie--;
               }
               return shortestMovie;
        
        
         /** END: BLOCK #2 **/
      }
     
      return aMovie;
   }
  
   private static void printSummary(Movie[] movies, Movie shortestMovie) {
      String summary="**Movie Summary**\n";
     
      /** START: BLOCK #3
       * First, using the summary variable declared above, loop through all of the movies entered, appending the title of each
       * movie to the summary. Then, append to the summary the number of movies entered, the title of the shortest movie
      * and the length of the shortest movie
       * Hint: To get the number of movies entered, use the getNumMovies() static method
       * Hint: To get the title and length of the shortest movie, use the object reference passed into the method
       */
       //totalRevenue = 0;
      for(int i = 0; i< Movie.getNumMovies(); i++){
         summary += "Movie[" + i + "]: " + Movie[i].toString() + "\n" +
         shortestMovie += "Shortest Movie[" + i + "]: " + Movie[n].toString();
      }       
      /** END: BLOCK #3 **/
             
      JOptionPane.showMessageDialog(null, summary);
   }
}