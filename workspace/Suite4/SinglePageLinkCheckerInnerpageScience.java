package Suite4;

import java.util.concurrent.TimeUnit;
import org.testng.annotations.*;


import java.io.File;  // Import the File class
import java.io.FileWriter;
import java.io.IOException;  // Import the IOException class to handle errors


import static org.testng.Assert.*;
import org.openqa.selenium.*;
import org.openqa.selenium.chrome.ChromeDriver;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.Iterator;
import java.util.List;


public class SinglePageLinkCheckerInnerpageScience {
	private WebDriver driver;
	private String baseUrl;
	private StringBuffer verificationErrors = new StringBuffer();


	@BeforeClass(alwaysRun = true)
	public void setUp() throws Exception {
		System.setProperty("webdriver.chrome.driver","C:\\selenium\\selenium-java-3.141.59\\chromedriver_win32\\chromedriver.exe");
		driver = new ChromeDriver();
		driver.manage().window().maximize();
		driver.manage().deleteAllCookies();
		baseUrl = "http://vivadigitalindia.net/v2/subject/science";
		driver.manage().timeouts().pageLoadTimeout(40, TimeUnit.SECONDS);
		driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
	}

	@Test
	public void testCase1() throws Exception {
		int countUrl=0;
		int brokenLinkCount=0;
		driver.get(baseUrl);

		String url = "";
		HttpURLConnection huc = null;
		int respCode = 200;

		List<WebElement> links = driver.findElements(By.tagName("a"));
		Iterator<WebElement> it = links.iterator();


		try {
			File myObj = new File("C:\\Users\\editor\\eclipse-workspace\\s2\\src\\myFileTest2.txt");
			if (myObj.createNewFile()) {
				System.out.println("File created: " + myObj.getName());
			} else {
				System.out.println("File already exists.");
			}
		} catch (IOException e) {
			System.out.println("An error occurred.");
			e.printStackTrace();
		}

		FileWriter myWriter = new FileWriter("C:\\Users\\editor\\eclipse-workspace\\s2\\src\\allUrlOnSinglePage1.txt");
		int counterForWebElement=0;
		while(it.hasNext()){
			myWriter.write(countUrl+" Text: "+ links.get(counterForWebElement).getText()+" id: "+links.get(counterForWebElement).getAttribute("id")+" Url "); //for getting text of each element
			System.out.print(countUrl+" Text: "+ links.get(counterForWebElement).getText()+" id: "+links.get(counterForWebElement++).getAttribute("id")+" Url "); //for getting text of each element
			++countUrl;
			url = it.next().getAttribute("href");
			if(url!=null)
			{
				myWriter.write(url);

			}
			System.out.println(url);

			if(url == null || url.isEmpty()){

				myWriter.write("URL is either not configured for anchor tag or it is empty\n");
				System.out.println("URL is either not configured for anchor tag or it is empty");
				continue;
			}

			if(!url.startsWith(baseUrl)){
				myWriter.write("URL belongs to another domain, skipping it.\n");
				System.out.println("URL belongs to another domain, skipping it.");
				continue;
			}

			try {
				huc = (HttpURLConnection)(new URL(url).openConnection());

				huc.setRequestMethod("HEAD");

				huc.connect();

				respCode = huc.getResponseCode();

				if(respCode >= 400){
					myWriter.write(url+ " is a broken link\n");
					System.out.println(url+" is a broken link");
					++brokenLinkCount;
				}
				else{
					myWriter.write(url+ " is a valid link\n");
					System.out.println(url+" is a valid link");
				}

			} catch (MalformedURLException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			} catch (IOException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		}
		myWriter.write("number of url in the website is "+ countUrl);
		System.out.println("number of url's in the website is "+countUrl);
		System.out.println("Broken link count: "+brokenLinkCount);
		myWriter.close();
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
}
