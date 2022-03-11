package com.example.projetthermo;

//import android.content.Intent;
import android.net.Uri;
import android.view.View;
import android.widget.Button;
import android.widget.MediaController;
import android.widget.Toast;
import android.widget.VideoView;
import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;


public class MainActivity2 extends AppCompatActivity implements ProjetThermo {

    private VideoView videoView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);

        Button btn = findViewById(R.id.btn1);
        btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Toast.makeText(getApplicationContext(),"L'intervention va débuter",Toast.LENGTH_LONG).show();

            }
        });

        videoView = (VideoView) findViewById(R.id.videoView);


        Uri vidUri = Uri.parse("android.resource://" + getPackageName() + "/" + R.raw.video2);
        videoView.setVideoURI(vidUri);
    }

    @Override
    protected void onResume() {
        super.onResume();
        videoView.start();
    }

    @Override
    protected void onPause() {
        super.onPause();
        videoView.suspend();
    }

    @Override
    public void onClick() {
        MediaController mediaController = new MediaController(this);
        videoView.setMediaController(mediaController);
        mediaController.setAnchorView(videoView);

    }

}