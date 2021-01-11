package Suite2;

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

public class ChapterManual {
	private WebDriver driver;
	private boolean acceptNextAlert = true;
	private StringBuffer verificationErrors = new StringBuffer();

	@BeforeClass(alwaysRun = true)
	public void setUp() throws Exception {
		System.setProperty("webdriver.chrome.driver","C:\\selenium\\selenium-java-3.141.59\\chromedriver_win32\\chromedriver.exe");
		driver = new ChromeDriver();
		driver.manage().window().maximize();
		driver.manage().deleteAllCookies();
		driver.manage().timeouts().pageLoadTimeout(40, TimeUnit.SECONDS);
		driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
	}

	@Test
	public void testUntitledTestCase() throws Exception {
		//LOGIN SCRIPT
		driver.get("https://volt.development.vivadevops.com/master");
		driver.findElement(By.name("email")).click();
		driver.findElement(By.name("email")).clear();
		driver.findElement(By.name("email")).sendKeys("rohit.shakya@vivavolt.net");
		driver.findElement(By.name("password")).clear();
		driver.findElement(By.name("password")).sendKeys("Volt@0202");
		driver.findElement(By.name("password")).sendKeys(Keys.ENTER);
		//MAIN SCRIPT START

		driver.get("https://volt.development.vivadevops.com/master/admin/chapteradd/");
		driver.findElement(By.xpath("//li[6]/a/p")).click();
		driver.findElement(By.xpath("//a/h4")).click();
		driver.findElement(By.xpath("//form[@id='createcourse']/div/div/div[2]/div/div/button/span")).click();
		driver.findElement(By.xpath("//form[@id='createcourse']/div/div/div[2]/div/div/div/ul/li[8]/a")).click();
		new Select(driver.findElement(By.id("changeCls"))).selectByVisibleText("Class 7"); //class 
		driver.findElement(By.xpath("//form[@id='createcourse']/div/div/div[2]/div[2]/div/button/span")).click();
		new Select(driver.findElement(By.id("getsubject"))).selectByVisibleText("G.K TEST"); //subject
		driver.findElement(By.xpath("(//button[@type='button'])[4]")).click();
		driver.findElement(By.xpath("//form[@id='createcourse']/div/div/div[2]/div[3]/div/button/span")).click();
		new Select(driver.findElement(By.id("setmodule"))).selectByVisibleText("ModuleRohit"); //module
		driver.findElement(By.xpath("//form[@id='createcourse']/div/div/div[2]/div[3]/div/button/span")).click();
		driver.findElement(By.xpath("//form[@id='createcourse']/div/div/div[2]/div[3]/div/button/span")).click();
		driver.findElement(By.xpath("//form[@id='createcourse']/div/div/div[2]/div[4]/div/button/span")).click();
		driver.findElement(By.xpath("//form[@id='createcourse']/div/div/div[2]/div[4]/div/button/span")).click();
		new Select(driver.findElement(By.id("setseries"))).selectByVisibleText("Theme2Geography");
		driver.findElement(By.name("coursetitle")).click();
		driver.findElement(By.name("coursetitle")).clear();
		driver.findElement(By.name("coursetitle")).sendKeys("Tenali Rama Three"); //chapter name
		driver.findElement(By.name("coursedetail")).click();
		driver.findElement(By.name("coursedetail")).clear();
		driver.findElement(By.name("coursedetail")).sendKeys("Tales of TenaLi Rama",Keys.TAB,Keys.TAB,Keys.ENTER); //chapter description
		Thread.sleep(5000);
		System.out.println("chapter created successfully");
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
