//question generator true false
package Suite3;

import static org.testng.Assert.fail;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.By;
import org.openqa.selenium.Keys;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.testng.annotations.AfterClass;
import org.testng.annotations.BeforeClass;
import org.testng.annotations.Test;

import java.io.File;
import java.io.FileInputStream;
import java.util.Iterator;
import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.ss.usermodel.Row;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;

public class testcase5TrueFalse1 {
	private WebDriver driver;
	private StringBuffer verificationErrors = new StringBuffer();

	@BeforeClass(alwaysRun = true)
	public void setUp() throws Exception {
		System.setProperty("webdriver.chrome.driver",
				"C:\\selenium\\selenium-java-3.141.59\\chromedriver_win32\\chromedriver.exe");
		driver = new ChromeDriver();
		driver.manage().window().maximize();
		driver.manage().deleteAllCookies();
		driver.manage().timeouts().pageLoadTimeout(40, TimeUnit.SECONDS);
		driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
	}

	@SuppressWarnings({ "resource", "deprecation" })
	@Test
	public void ChapterTestCase() throws Exception {

		File file = new File("C:\\Users\\editor\\eclipse-workspace\\s2\\src\\xlsdocs\\addmcq.xlsx"); // creating a new file
		// instance
		FileInputStream fis = new FileInputStream(file); // obtaining bytes from the file
		// creating Workbook instance that refers to .xlsx file
		XSSFWorkbook wb = new XSSFWorkbook(fis);
		XSSFSheet sheet = wb.getSheetAt(0); // creating a Sheet object to retrieve object
		Iterator<Row> itr = sheet.iterator();

		String question = "";
		boolean answer = false;
		// iterating over excel file
		while (itr.hasNext()) {
			Row row = itr.next();
			Iterator<Cell> cellIterator = row.cellIterator(); // iterating over each column
			while (cellIterator.hasNext()) {

				Cell cell = cellIterator.next();

				switch (cell.getCellType()) {
				case Cell.CELL_TYPE_STRING: // field that represents string cell type
					String mycell = cell.getStringCellValue();
					if (cell.getColumnIndex() == 0 && cell.getRowIndex() == 1) {
						question = mycell;
						System.out.println(question);
					}  if (cell.getColumnIndex() == 2 && cell.getRowIndex() == 1) {

						//System.out.println(questionSetNumber);
					}
					break;
				case Cell.CELL_TYPE_NUMERIC: // field that represents number cell type
					//System.out.print(cell.getNumericCellValue() + "\t\t\t");
					break;
				case Cell.CELL_TYPE_BOOLEAN: // field that represents number cell type
					//System.out.print(cell.getBooleanCellValue() + "\t\t\t");
					if (cell.getColumnIndex() == 1 && cell.getRowIndex() == 1) {
						answer=cell.getBooleanCellValue();
					} 

					break;
				default:
				}
			}
			//System.out.println("");
		}

		//LOGIN SCRIPT
		driver.get("https://sample.volt.development.vivadevops.com/master");
		driver.findElement(By.name("email")).click();
		driver.findElement(By.name("email")).clear();
		driver.findElement(By.name("email")).sendKeys("volt@vivadigitalindia.net");
		driver.findElement(By.name("password")).clear();
		driver.findElement(By.name("password")).sendKeys("Volt@viva02");
		driver.findElement(By.name("password")).sendKeys(Keys.ENTER);
		//MAIN SCRIPT START

		driver.get("https://sample.volt.development.vivadevops.com/master/questionlist/create/171");
		driver.findElement(By.id("tnf")).click();
		driver.findElement(By.xpath("//p")).click();
		driver.findElement(By.id("cke_203_label")).click();
		if(answer==true)
		{
			driver.findElement(By.xpath("(//input[@name='mcqval'])[5]")).click(); //true click
		}
		else if(answer==false)
		{
			driver.findElement(By.xpath("(//input[@name='mcqval'])[6]")).click(); //false click

		}
		driver.findElement(By.xpath("//div[@id='cke_3_contents']/textarea")).click();
		driver.findElement(By.xpath("//div[@id='cke_3_contents']/textarea")).clear();
		driver.findElement(By.xpath("//div[@id='cke_3_contents']/textarea")).sendKeys("<p>"+question+"</p>",Keys.TAB,Keys.TAB,Keys.TAB,Keys.TAB,Keys.ENTER);
		driver.close();
	}

	@AfterClass(alwaysRun = true)
	public void tearDown() throws Exception {
		driver.quit();
		String verificationErrorString = verificationErrors.toString();
		if (!"".equals(verificationErrorString)) {
			fail(verificationErrorString);
		}
	}

}