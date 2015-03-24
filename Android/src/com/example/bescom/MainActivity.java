package com.example.bescom;
 
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.sql.Date;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.List;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.NameValuePair;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.entity.UrlEncodedFormEntity;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.message.BasicNameValuePair;
import android.os.Build;
//import org.json.JSONObject;
import android.os.Bundle;
import android.os.StrictMode;
import android.annotation.SuppressLint;
import android.annotation.TargetApi;
import android.app.Activity;
import android.text.format.DateFormat;
import android.util.Log;
//import android.view.Menu;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;
 
@TargetApi(Build.VERSION_CODES.GINGERBREAD)
@SuppressLint("NewApi")
public class MainActivity extends Activity {

	
	
    @SuppressLint("NewApi")
	@Override
    protected void onCreate(Bundle savedInstanceState) {

        // TODO Auto-generated method stub
        super.onCreate(savedInstanceState);
        StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitAll().build();
        StrictMode.setThreadPolicy(policy);
        setContentView(R.layout.activity_main);
        
        

         final EditText e_id = (EditText) findViewById(R.id.editText1);
        final  EditText e_name=(EditText) findViewById(R.id.editText2);
        Button insert=(Button) findViewById(R.id.button1);
        
      

        insert=(Button)findViewById(R.id.button1);
        insert.setOnClickListener(new View.OnClickListener() {
        	
        	InputStream is = null;

        	@Override
            public void onClick(View v) {
                // TODO Auto-generated method stub
        		String id = ""+e_id.getText().toString();
        		String name = ""+e_name.getText().toString();
        		
        		Calendar c = Calendar.getInstance();
        		

        		SimpleDateFormat df = new SimpleDateFormat("yyyy-MM-dd");
        	
        		String bill_date = df.format(c.getTime());
        		
        		Calendar c2=Calendar.getInstance();
        		c2=(Calendar)c.clone();
        		
        		c2.add(Calendar.DAY_OF_YEAR,10);
        		
        		String due_date = df.format(c2.getTime());
        		
        		//int year = c.get(Calendar.YEAR);
        	    int month = c.get(Calendar.MONTH);      // 0 to 11
        	    month++;
        	    StringBuilder sb1 = new StringBuilder();
                sb1.append("");
                sb1.append(month);
                String bill_month = sb1.toString();
        	   /* int day = c.get(Calendar.DAY_OF_MONTH);
        	    int due_month, due_year;
        	    /*if(month==11)
        	    {
        	    	due_month=0;
        	    	due_year=year+1;
        	    }
        	    else
        	    {
        	    	due_month=month+1;
        	    	due_year=year;
        	    }*/
        		
        		int amount = new Integer(name).intValue();
                amount=amount*6;
                StringBuilder sb = new StringBuilder();
                sb.append("");
                sb.append(amount);
                String amt = sb.toString();
                List<NameValuePair> nameValuePairs= new ArrayList<NameValuePair>(1);
                nameValuePairs = new ArrayList<NameValuePair>();
                nameValuePairs.add(new BasicNameValuePair("id", id));
                nameValuePairs.add(new BasicNameValuePair("name", name));
                nameValuePairs.add(new BasicNameValuePair("amt", amt));
                nameValuePairs.add(new BasicNameValuePair("bill_date", bill_date));
                nameValuePairs.add(new BasicNameValuePair("due_date", due_date));
                nameValuePairs.add(new BasicNameValuePair("bill_month", bill_month));
                try
                {
                	HttpClient httpclient = new DefaultHttpClient();
                    HttpPost httppost = new HttpPost("http://192.168.182.1/create_bill.php");
                    httppost.setEntity(new UrlEncodedFormEntity(nameValuePairs));
                    HttpResponse response = httpclient.execute(httppost);
                    HttpEntity entity = response.getEntity();
                    is = entity.getContent();
                    String msg = "Bill created successfully";
                    Toast.makeText(getApplicationContext(), msg, Toast.LENGTH_LONG).show();
                    
                }
                catch(ClientProtocolException e)
                {
                    Log.e("ClientProtocol","Log_tag");
                    e.printStackTrace();
                    
                }
                catch(IOException e)
                {
                	Log.e("Log_tag","IOException");
                	e.printStackTrace();
                }
            }
        });


    }
    

    }    
