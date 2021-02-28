
package Suite4;

import java.util.concurrent.TimeUnit;
import org.testng.annotations.*;

import static org.testng.Assert.*;
import org.openqa.selenium.*;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.interactions.Actions;

public class sliderCheck {
	private WebDriver driver;
	private String baseUrl;
	private StringBuffer verificationErrors = new StringBuffer();


	@BeforeClass(alwaysRun = true)
	public void setUp() throws Exception {
		System.setProperty("webdriver.chrome.driver","C:\\selenium\\selenium-java-3.141.59\\chromedriver_win32\\chromedriver.exe");
		driver = new ChromeDriver();
		driver.manage().window().maximize();
		driver.manage().deleteAllCookies();
		baseUrl = "http://vivadigitalindia.net/v2/";
		driver.manage().timeouts().pageLoadTimeout(40, TimeUnit.SECONDS);
		driver.manage().timeouts().implicitlyWait(40, TimeUnit.SECONDS);
	}

	@Test
	public void testCase1() throws Exception {
		driver.get(baseUrl);
		driver.findElement(By.xpath("//html")).click();
		//Instantiate Action Class        
		Actions actions = new Actions(driver);
		//Retrieve WebElement 'fa fa-angle-left' to perform mouse hover 
		WebElement menuOption = driver.findElement(By.className("fa fa-angle-left"));
		//Mouse hover menuOption 'Music'
		actions.moveToElement(menuOption).perform();
		System.out.println("Done Mouse hover on 'Music' from Menu");

		System.out.println("left slider button:"+
				isElementPresent(By.className("fa fa-angle-left")));
		System.out.println("right slider button:"+
				isElementPresent(By.className("fa fa-angle-right")));
		driver.close();
		driver.quit();
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
}
