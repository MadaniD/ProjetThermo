package com.example.projetthermo;

import android.content.Intent;
//import android.net.Uri;
import android.view.View;
import android.widget.Button;
//import android.widget.MediaController;
//import android.widget.Toast;
//import android.widget.VideoView;
import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;


public class MainActivity extends AppCompatActivity {

    Button btn1;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        btn1=(Button)findViewById(R.id.intent);
        btn1.setOnClickListener(view -> {
            Intent intention = new Intent(MainActivity.this, MainActivity2.class);
            startActivity(intention);
        });
    }

    public void sendMessage(View view) {
    }
}