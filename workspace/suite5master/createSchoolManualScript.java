package suite5master;

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

public class createSchoolManualScript {
	private WebDriver driver;
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
		String baseUrl = "https://master.volt.development.vivadevops.com/";
		driver.get(baseUrl);
		driver.findElement(By.name("email")).click();
		driver.findElement(By.name("email")).clear();
		driver.findElement(By.name("email")).sendKeys("rohit.shakya@vivavolt.net");
		driver.findElement(By.name("password")).clear();
		driver.findElement(By.name("password")).sendKeys("Volt@0202");
		driver.findElement(By.name("password")).sendKeys(Keys.ENTER);
		driver.get("https://master.volt.development.vivadevops.com/manage-user");
	    driver.findElement(By.xpath("//li[12]/a/p")).click();
	    driver.findElement(By.xpath("//a/h4")).click();
	    driver.findElement(By.xpath("//form[@id='createform']/div/div/div[2]/div/div/div/div/button/span")).click();
	    driver.findElement(By.xpath("//form[@id='createform']/div/div/div[2]/div/div/div/div/div/ul/li[3]/a")).click();
	    new Select(driver.findElement(By.id("stateIs"))).selectByVisibleText("ANDHRA PRADESH");
	    new Select(driver.findElement(By.id("getcities"))).selectByVisibleText("Adilabad");
	    driver.findElement(By.name("title")).click();
	    driver.findElement(By.name("title")).clear();
	    driver.findElement(By.name("title")).sendKeys("xyz");
	    driver.findElement(By.id("termstart")).click();
	    new Select(driver.findElement(By.id("class-1"))).selectByVisibleText("Class 1");
	    driver.findElement(By.id("add")).click();
	    driver.findElement(By.name("submit")).click();
	    Thread.sleep(10000);
	    System.out.println("User created successfully");
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
