
% BY   SCOTT                                                                                                                                              % red2blue
% change red to blue
clear all;
clc;
rgb = imread('weini.jpg');
figure;
imshow(rgb);
R=rgb(:,:,1); %red
G=rgb(:,:,2); %green
B=rgb(:,:,3); %blue
[x,y,z]=size(rgb);
for i=1:x
    for j=1:y
        if( (R(i,j) >= 100) && (R(i,j) <=255) && (G(i,j) >= 100) && (G(i,j) <=255))
            R(i,j) = 0;
            G(i,j) = 223;
            B(i,j) = 0;
        
        elseif( (R(i,j) <50) && (G(i,j) < 50) && (B(i,j) < 50))
            R(i,j) = 255;
            G(i,j) = 0;
            B(i,j) = 0;
        
        else
            R(i,j) = 0;
            G(i,j) = 0;
            B(i,j) = 153;
        end
    end
end
 
% in this way
blue(:,:,1)=R(:,:);
blue(:,:,2)=G(:,:);
blue(:,:,3)=B(:,:);

figure;
imshow(blue);

