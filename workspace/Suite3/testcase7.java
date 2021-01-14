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

public class testcase7 {
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
		//MAIN SCRIPT START
		driver.get("https://sample.volt.development.vivadevops.com/master/questionlist/create/171");
	    driver.findElement(By.id("fib")).click();
	    driver.findElement(By.xpath("(//input[@name='mcqval1'])[3]")).click();
	    driver.findElement(By.xpath("//p")).click();
	    driver.findElement(By.id("cke_122_label")).click();
	    driver.findElement(By.xpath("//div[@id='cke_1_contents']/textarea")).click();
	    driver.findElement(By.xpath("//div[@id='cke_1_contents']/textarea")).clear();
	    driver.findElement(By.xpath("//div[@id='cke_1_contents']/textarea")).sendKeys("A");
	    driver.findElement(By.id("cke_163_label")).click(); 
	    driver.findElement(By.xpath("//div[@id='cke_2_contents']/textarea")).click();
	    driver.findElement(By.xpath("//div[@id='cke_2_contents']/textarea")).clear();
	    driver.findElement(By.xpath("//div[@id='cke_2_contents']/textarea")).sendKeys("changes its colour to blend with its surroundings.");
	    driver.findElement(By.id("cke_1043_label")).click();
	    driver.findElement(By.xpath("//div[@id='cke_24_contents']/textarea")).click();
	    driver.findElement(By.xpath("//div[@id='cke_24_contents']/textarea")).clear();
	    driver.findElement(By.xpath("//div[@id='cke_24_contents']/textarea")).sendKeys("chameleon");
	    driver.findElement(By.id("cke_1083_label")).click();
	    driver.findElement(By.xpath("//div[@id='cke_25_contents']/textarea")).click();
	    driver.findElement(By.xpath("//div[@id='cke_25_contents']/textarea")).clear();
	    driver.findElement(By.xpath("//div[@id='cke_25_contents']/textarea")).sendKeys("mole");
	    driver.findElement(By.id("cke_1123_label")).click();
	    driver.findElement(By.xpath("//div[@id='cke_26_contents']/textarea")).click();
	    driver.findElement(By.xpath("//div[@id='cke_26_contents']/textarea")).clear();
	    driver.findElement(By.xpath("//div[@id='cke_26_contents']/textarea")).sendKeys("porcupine");
	    driver.findElement(By.id("cke_1163_label")).click();
	    driver.findElement(By.xpath("//div[@id='cke_27_contents']/textarea")).click();
	    driver.findElement(By.xpath("//div[@id='cke_27_contents']/textarea")).clear();
	    driver.findElement(By.xpath("//div[@id='cke_27_contents']/textarea")).sendKeys("snake");
	    driver.findElement(By.name("submit")).click();
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