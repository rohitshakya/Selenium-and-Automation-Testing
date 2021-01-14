//question generator true false
package Suite3;

import static org.testng.Assert.fail;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.Alert;
import org.openqa.selenium.By;
import org.openqa.selenium.Keys;
import org.openqa.selenium.NoAlertPresentException;
import org.openqa.selenium.NoSuchElementException;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.Select;
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

public class testcase8 {
	private WebDriver driver;
	private boolean acceptNextAlert = true;
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

		File file = new File("C:\\Users\\editor\\eclipse-workspace\\s2\\src\\xlsdocs\\Fillups.xlsx"); // creating a new file
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
		boolean answer = false;
		double questionSetNumber;
		int rowLimit=2;
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
				/*
				 * else if (cell.getColumnIndex() == 2 && cell.getRowIndex() == 1) { switch
				 * (cell.getCellType()) { case Cell.CELL_TYPE_STRING: // field that represents
				 * string cell type questionSetNumber= cell.getNumericCellValue(); break;
				 * default: break; } } else if (cell.getColumnIndex() == 1 && cell.getRowIndex()
				 * == 1) { switch (cell.getCellType()) { case Cell.CELL_TYPE_STRING: // field
				 * that represents string cell type answer=cell.getBooleanCellValue(); break;
				 * default: break; } }
				 */
			}
			if(rowInit<1) continue;
			driver.get("https://sample.volt.development.vivadevops.com/master/questionlist/create/171");
			driver.findElement(By.id("fib")).click();
			driver.findElement(By.xpath("(//input[@name='mcqval1'])[3]")).click();
			driver.findElement(By.xpath("//p")).click();
			driver.findElement(By.id("cke_122_label")).click();
			driver.findElement(By.xpath("//div[@id='cke_1_contents']/textarea")).click();
			driver.findElement(By.xpath("//div[@id='cke_1_contents']/textarea")).clear();
			driver.findElement(By.xpath("//div[@id='cke_1_contents']/textarea")).sendKeys(question1);
			driver.findElement(By.id("cke_163_label")).click(); 
			driver.findElement(By.xpath("//div[@id='cke_2_contents']/textarea")).click();
			driver.findElement(By.xpath("//div[@id='cke_2_contents']/textarea")).clear();
			driver.findElement(By.xpath("//div[@id='cke_2_contents']/textarea")).sendKeys(question2);
			driver.findElement(By.id("cke_1043_label")).click();
			driver.findElement(By.xpath("//div[@id='cke_24_contents']/textarea")).click();
			driver.findElement(By.xpath("//div[@id='cke_24_contents']/textarea")).clear();
			driver.findElement(By.xpath("//div[@id='cke_24_contents']/textarea")).sendKeys(option1);
			driver.findElement(By.id("cke_1083_label")).click();
			driver.findElement(By.xpath("//div[@id='cke_25_contents']/textarea")).click();
			driver.findElement(By.xpath("//div[@id='cke_25_contents']/textarea")).clear();
			driver.findElement(By.xpath("//div[@id='cke_25_contents']/textarea")).sendKeys(option2);
			driver.findElement(By.id("cke_1123_label")).click();
			driver.findElement(By.xpath("//div[@id='cke_26_contents']/textarea")).click();
			driver.findElement(By.xpath("//div[@id='cke_26_contents']/textarea")).clear();
			driver.findElement(By.xpath("//div[@id='cke_26_contents']/textarea")).sendKeys(option3);
			driver.findElement(By.id("cke_1163_label")).click();
			driver.findElement(By.xpath("//div[@id='cke_27_contents']/textarea")).click();
			driver.findElement(By.xpath("//div[@id='cke_27_contents']/textarea")).clear();
			driver.findElement(By.xpath("//div[@id='cke_27_contents']/textarea")).sendKeys(option4);
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

	private boolean isElementPresent(By by) {
		try {
			driver.findElement(by);
			return true;
		} catch (NoSuchElementException e) {
			return false;
		}
	}

	private boolean isAlertPresent() {
		try {
			driver.switchTo().alert();
			return true;
		} catch (NoAlertPresentException e) {
			return false;
		}
	}

	private String closeAlertAndGetItsText() {
		try {
			Alert alert = driver.switchTo().alert();
			String alertText = alert.getText();
			if (acceptNextAlert) {
				alert.accept();
			} else {
				alert.dismiss();
			}
			return alertText;
		} finally {
			acceptNextAlert = true;
		}
	}

}