package DefaultSuite;
import java.awt.Desktop;
import java.io.File;  // Import the File class
import java.io.FileNotFoundException;
import java.io.FileWriter;
import java.io.IOException;  // Import the IOException class to handle errors
import java.util.Scanner;

public class CreateFile {
	public static void main(String[] args) throws IOException {

		File myObj = new File("C:\\Users\\editor\\eclipse-workspace\\s2\\src\\myfile.txt");
		checkFile(myObj);
		open(myObj);
		readFromFile(myObj);
		writeFile(myObj);


	}
	static boolean checkFile(File file)
	{
		try {
			if (file.createNewFile()) {
				System.out.println("File created: " + file.getName());
			} else {
				System.out.println("File already exists.");
			}
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

		return false;

	}
	static void readFromFile(File file)
	{
		try {

			Scanner myReader = new Scanner(file);
			while (myReader.hasNextLine()) {
				String data = myReader.nextLine();
				System.out.println(data);
			}
			myReader.close();
		} catch (FileNotFoundException e) {
			System.out.println("An error occurred.");
			e.printStackTrace();
		}

	}

	static void writeFile(File file) throws IOException
	{

		FileWriter myWriter = new FileWriter("C:\\Users\\editor\\eclipse-workspace\\s2\\src\\myfile.txt");
		myWriter.write("Hi this is Rohit Shakya!");
		myWriter.close();
		System.out.println("Successfully wrote to the file.");

	}
	static void open(File file)
	{
		Desktop desktop = Desktop.getDesktop();  
		if(file.exists())
			try {
				desktop.open(file);
			} catch (IOException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}      
	}


}
