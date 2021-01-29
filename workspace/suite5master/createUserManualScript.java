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

public class createUserManualScript {
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
	    driver.findElement(By.xpath("//a/h4")).click();
	    driver.findElement(By.xpath("//form[@id='adduser']/div/div/div[2]/div/div/div/div/button/span")).click();
	    driver.findElement(By.xpath("//form[@id='adduser']/div/div/div[2]/div/div/div/div/div/ul/li[2]/a")).click();
	    new Select(driver.findElement(By.id("stateIs"))).selectByVisibleText("DELHI");
	    new Select(driver.findElement(By.id("getcities"))).selectByVisibleText("Central Delhi");
	    new Select(driver.findElement(By.id("getschool"))).selectByVisibleText("DPS PUBLIC SCHOOL");
	    //student
	    new Select(driver.findElement(By.id("classlist"))).selectByVisibleText("Class 3");
	    new Select(driver.findElement(By.id("sectionclass"))).selectByVisibleText("B");
	    driver.findElement(By.name("name")).clear();//name lastname //email//phonenumber//password8char//
	    driver.findElement(By.name("name")).sendKeys("rohit",Keys.TAB,"shakya", Keys.TAB,"rohit@gmail.com",Keys.TAB,"7503356173",Keys.TAB,"bhygvctd34",Keys.TAB,Keys.TAB,Keys.TAB,Keys.TAB);
	    driver.findElement(By.xpath("//form[@id='adduser']/div/div/div[2]/div[3]/div/div/div/button/span")).click();
	    driver.findElement(By.name("dob")).click();
	    driver.findElement(By.xpath("//div[3]/div/table/tbody/tr[4]/td[4]")).click();
	    driver.findElement(By.xpath("//form[@id='adduser']/div/div/div[2]/div[3]/div/div/div/button/span")).click();
	    driver.findElement(By.id("emailpwd")).click();
	    driver.findElement(By.xpath("//button[@type='submit']")).click();
	    Thread.sleep(3000);
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
