package DefaultSuite;

import java.io.File;  
import java.io.FileInputStream;  
import java.util.Iterator;  
import org.apache.poi.ss.usermodel.Cell;  
import org.apache.poi.ss.usermodel.Row;  
import org.apache.poi.xssf.usermodel.XSSFSheet;  
import org.apache.poi.xssf.usermodel.XSSFWorkbook;  
public class excelTest2  
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

			String className="";
			String subjectName="";
			String moduleName="";
			String themeName="";
			String chapterName="";
			String chapterDescription="";
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
						if(cell.getColumnIndex()==0 && cell.getRowIndex()==1)
						{
							className=mycell;
						}
						else if(cell.getColumnIndex()==1 && cell.getRowIndex()==1)
						{
							subjectName=mycell;
						}
						else if(cell.getColumnIndex()==2 && cell.getRowIndex()==1)
						{
							moduleName=mycell;
						}
						else if(cell.getColumnIndex()==3 && cell.getRowIndex()==1)
						{
							themeName=mycell;
						}
						else if(cell.getColumnIndex()==4 && cell.getRowIndex()==1)
						{
							chapterName=mycell;
						}
						else if(cell.getColumnIndex()==5 && cell.getRowIndex()==1)
						{
							chapterDescription=mycell;
						}

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

			System.out.println(className+subjectName+moduleName+themeName+chapterName+chapterDescription);
			
		}  
		catch(Exception e)  
		{  
			e.printStackTrace();  
		}  
	}  
}  
