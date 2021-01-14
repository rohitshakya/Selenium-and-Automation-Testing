package DefaultSuite;

import java.io.File;  
import java.io.FileInputStream;  
import java.util.Iterator;  
import org.apache.poi.ss.usermodel.Cell;  
import org.apache.poi.ss.usermodel.Row;  
import org.apache.poi.xssf.usermodel.XSSFSheet;  
import org.apache.poi.xssf.usermodel.XSSFWorkbook;  
public class ClassExcel  
{  
	@SuppressWarnings({ "resource", "deprecation" })
	public static void main(String[] args)   
	{  
		try  
		{

			File file = new File("C:\\Users\\editor\\eclipse-workspace\\s2\\src\\module.xlsx");   //creating a new file instance  
			FileInputStream fis = new FileInputStream(file);   //obtaining bytes from the file  
			//creating Workbook instance that refers to .xlsx file  
			XSSFWorkbook wb = new XSSFWorkbook(fis);   
			XSSFSheet sheet = wb.getSheetAt(0);     //creating a Sheet object to retrieve object  
			Iterator<Row> itr = sheet.iterator();
			//iterating over excel file  
			while (itr.hasNext())                 
			{  
				Row row = itr.next();  
				Iterator<Cell> cellIterator = row.cellIterator();   //iterating over each column  
				while (cellIterator.hasNext())   
				{  

					Cell cell = cellIterator.next();  
					switch (cell.getCellType())               
					{  
					case Cell.CELL_TYPE_STRING:    //field that represents string cell type  
						String mycell=cell.getStringCellValue();
						System.out.print(mycell + "\t\t\t");
						
						break;  
					case Cell.CELL_TYPE_NUMERIC:    //field that represents number cell type  
						System.out.print(cell.getNumericCellValue() + "\t\t\t");  
						break;  
					default:  
					}  
				}  
				System.out.println("");  
			}  
		}  
		catch(Exception e)  
		{  
			e.printStackTrace();  
		}  
	}  
}  
