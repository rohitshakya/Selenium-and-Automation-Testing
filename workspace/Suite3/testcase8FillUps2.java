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

public class testcase8FillUps2 {
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


		//LOGIN SCRIPT
		driver.get("https://sample.volt.development.vivadevops.com/master");
		driver.findElement(By.name("email")).click();
		driver.findElement(By.name("email")).clear();
		driver.findElement(By.name("email")).sendKeys("volt@vivadigitalindia.net");
		driver.findElement(By.name("password")).clear();
		driver.findElement(By.name("password")).sendKeys("Volt@viva02");
		driver.findElement(By.name("password")).sendKeys(Keys.ENTER);

		File file = new File("C:\\Users\\editor\\eclipse-workspace\\s2\\src\\xlsdocs\\addFillups.xlsx"); // creating a new file
		// instance
		FileInputStream fis = new FileInputStream(file); // obtaining bytes from the file
		// creating Workbook instance that refers to .xlsx file
		XSSFWorkbook wb = new XSSFWorkbook(fis);
		XSSFSheet sheet = wb.getSheetAt(0); // creating a Sheet object to retrieve object
		Iterator<Row> itr = sheet.iterator();
		int rowTotal = sheet.getPhysicalNumberOfRows();
		System.out.println(rowTotal);
		String question1 = "";
		String question2 = "";
		String option1 = "";
		String option2 = "";
		String option3 = "";
		String option4 = "";
		int answer = 0;
		int rowLimit=4;
		int rowCheck=0;
		// iterating over excel file
		while (itr.hasNext()) {

			if(rowCheck>rowLimit) { break; }

			Row row = itr.next();
			int rowInit = 0;
			Iterator<Cell> cellIterator = row.cellIterator(); // iterating over each column
			while (cellIterator.hasNext()) {
				Cell cell = cellIterator.next();
				rowInit=cell.getRowIndex();
				if(rowInit<1) continue;
				if (cell.getColumnIndex() == 4 && cell.getRowIndex() > 0) {
					switch (cell.getCellType()) {
					case Cell.CELL_TYPE_STRING: // field that represents string cell type
						question1 = cell.getStringCellValue();
						break;
					default:
						break;
					}
				}
				else if (cell.getColumnIndex() == 5 && cell.getRowIndex() > 0) {
					switch (cell.getCellType()) {
					case Cell.CELL_TYPE_STRING: // field that represents string cell type
						question2 = cell.getStringCellValue();
						break;
					default:
						break;
					}
				}
				else if (cell.getColumnIndex() == 6 && cell.getRowIndex() > 0) {
					switch (cell.getCellType()) {
					case Cell.CELL_TYPE_STRING: // field that represents string cell type
						option1 = cell.getStringCellValue();
						break;
					default:
						break;
					}
				}
				else if (cell.getColumnIndex() == 7 && cell.getRowIndex() > 0) {
					switch (cell.getCellType()) {
					case Cell.CELL_TYPE_STRING: // field that represents string cell type
						option2 = cell.getStringCellValue();
						break;
					default:
						break;
					}
				}
				else if (cell.getColumnIndex() == 8 && cell.getRowIndex() > 0) {
					switch (cell.getCellType()) {
					case Cell.CELL_TYPE_STRING: // field that represents string cell type
						option3 = cell.getStringCellValue();
						break;
					default:
						break;
					}
				}
				else if (cell.getColumnIndex() == 9 && cell.getRowIndex() > 0) {
					switch (cell.getCellType()) {
					case Cell.CELL_TYPE_STRING: // field that represents string cell type
						option4 = cell.getStringCellValue();
						break;
					default:
						break;
					}
				}
				else if (cell.getColumnIndex() == 10 && cell.getRowIndex() >0) {
					switch (cell.getCellType()) {
					case Cell.CELL_TYPE_NUMERIC: // field that represents string cell type
						answer = (int) cell.getNumericCellValue();
						break;
					default:
						break;
					}
				}
			}
			if(rowInit<1) continue;
			driver.get("https://sample.volt.development.vivadevops.com/master/questionlist/create/171");
			driver.findElement(By.id("fib")).click();

			driver.findElement(By.xpath("//p")).click();
			driver.findElement(By.id("cke_122_label")).click();
			driver.findElement(By.xpath("//div[@id='cke_1_contents']/textarea")).click();
			driver.findElement(By.xpath("//div[@id='cke_1_contents']/textarea")).clear();
			driver.findElement(By.xpath("//div[@id='cke_1_contents']/textarea")).sendKeys(question1,Keys.TAB,Keys.TAB);
			driver.findElement(By.id("cke_163_label")).click(); 
			driver.findElement(By.xpath("//div[@id='cke_2_contents']/textarea")).click();
			driver.findElement(By.xpath("//div[@id='cke_2_contents']/textarea")).clear();
			driver.findElement(By.xpath("//div[@id='cke_2_contents']/textarea")).sendKeys(question2,Keys.TAB,Keys.TAB);
			driver.findElement(By.id("cke_1043_label")).click();
			driver.findElement(By.xpath("//div[@id='cke_24_contents']/textarea")).click();
			driver.findElement(By.xpath("//div[@id='cke_24_contents']/textarea")).clear();
			driver.findElement(By.xpath("//div[@id='cke_24_contents']/textarea")).sendKeys(option1,Keys.TAB,Keys.TAB);
			driver.findElement(By.id("cke_1083_label")).click();
			driver.findElement(By.xpath("//div[@id='cke_25_contents']/textarea")).click();
			driver.findElement(By.xpath("//div[@id='cke_25_contents']/textarea")).clear();
			driver.findElement(By.xpath("//div[@id='cke_25_contents']/textarea")).sendKeys(option2,Keys.TAB,Keys.TAB);
			driver.findElement(By.id("cke_1123_label")).click();
			driver.findElement(By.xpath("//div[@id='cke_26_contents']/textarea")).click();
			driver.findElement(By.xpath("//div[@id='cke_26_contents']/textarea")).clear();
			driver.findElement(By.xpath("//div[@id='cke_26_contents']/textarea")).sendKeys(option3,Keys.TAB,Keys.TAB);
			driver.findElement(By.id("cke_1163_label")).click();
			driver.findElement(By.xpath("//div[@id='cke_27_contents']/textarea")).click();
			driver.findElement(By.xpath("//div[@id='cke_27_contents']/textarea")).clear();
			driver.findElement(By.xpath("//div[@id='cke_27_contents']/textarea")).sendKeys(option4,Keys.TAB,Keys.TAB);
			switch(answer){
			case 1:
				driver.findElement(By.xpath("(//input[@name='mcqval1'])[1]")).click();
				break;
			case 2:
				driver.findElement(By.xpath("(//input[@name='mcqval1'])[2]")).click();
				break;
			case 3:
				driver.findElement(By.xpath("(//input[@name='mcqval1'])[3]")).click();
				break;
			case 4:
				driver.findElement(By.xpath("(//input[@name='mcqval1'])[4]")).click();
				break;
			default:
				break;

			}
			driver.findElement(By.name("submit")).click();

			//System.out.println("");
		}
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