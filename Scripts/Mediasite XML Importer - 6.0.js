///////////////////////////////////////////////////////////
//                                                       //
//    Script that automates the Mediasite XML process    //
//                   For Mediasite 6.0                   //
//                                                       //
//                Taylor Calderone, 2014                 //
//               spacecowgoesmoo@gmail.com               //
//														 //
///////////////////////////////////////////////////////////    
   
   
   
   
import System;																			// Stuff needed for the code to work
import System.Collections			                                                    //
import System.Text;                                                                     //
import System.IO;                                                                       //
import System.Drawing;                                                                  //
import System.Windows.Forms;                                                            //
import Sony.Vegas;                                                                      //








var skipEverything = false;																//
var fbd = new FolderBrowserDialog();                                                    // initializes the folder browser
fbd.Description = "Select the Mediasite folder";                                        // sets the folder browser's description
fbd.ShowNewFolderButton = false;                                                        // hides the 'New Folder' button
var result = fbd.ShowDialog();                                                          // activates the browser and saves the button clicked
var wharr = fbd.SelectedPath;                                                           // grabs the filepath that the user selects
if (result == "Cancel")                                                                 // if the cancel button is pressed
    {                                                                                   //
        MessageBox.Show("Script Cancelled D:");                                         // show a message box
		skipEverything = true;                                                          // and skip the rest of the script to prevent a crash exit
    }                                                                                   //





	
	

if (skipEverything == false){															// makes the cancel button not cause a exit crash
	
var blarg = new VideoTrack (1);															// create an empty track
Vegas.Project.Tracks.Add(blarg);														// adds the empty track to the project
var yarr : ArrayList = new ArrayList();													// initialize ArrayList
var imageNumber = 1;																	// initialize some variables
var r = 0;																				//
Vegas.Project.Ruler.Format = RulerFormat.Seconds;										// change ruler format to seconds


var squarg: StreamReader = new StreamReader(wharr + "\\MediasitePresentation_60.xml");	// Reads an external file and executes code
var line : String;																		// for each non-empty line of it
while ((line = squarg.ReadLine()) != null) {											
		if (line != String.Empty) {
			if (line.substring(0, 16) == "          <Time>") {							// If a timestamp is detected in the XML file
				yarr.Add(line.slice(16, -7));											// Store the timestamp in the array
			}
		}
	}
squarg.Close();
}








for (var q in yarr) {																	// for each entry in the array


	if (imageNumber < 10) { imageNumber = "000" + imageNumber; } else					// Adds the extra zeroes to ImageNumber
	if (imageNumber < 100) { imageNumber = "00" + imageNumber; } else					//   (terrible hack because
	if (imageNumber < 1000) { imageNumber = "0" + imageNumber; }						//   .toString("0000"); isn't working)
				
				
	Vegas.OpenFile(wharr + "\\Content\\slide_"+ imageNumber + "_full.jpg");				// add an image to the timeline
	imageNumber++;																		// increment the imageNumber for the next loop

	
	if (r+1 < yarr.Count) {																// (this prevents the script from exiting with a crash)
	var length = yarr[r+1] - yarr[r];													// calculate length of current slide
	var time = new Timecode(yarr[r]/1000);												// convert timestamps to Vegas friendly timecode
	length = new Timecode(length/1000);													//
	r++;																				// increment the counter
	} else {
	var time = new Timecode(yarr[r]/1000);												// custom behaviour for final image
	length = new Timecode(30000); }														// arbitrary length of 30 seconds
	

	for (var cow in Vegas.Project.Tracks) {												// Give the image the correct location & length
		for (var moo in cow.Events) {													//
			if (moo.Selected == true) { moo.AdjustStartLength(time, length, false); }  	//
	} }																					//
}