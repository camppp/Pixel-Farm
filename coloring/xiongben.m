
% BY   SCOTT                                                                                                                                              % red2blue
% change red to blue
clear all;
clc;
rgb = imread('xiongben.jpg');
figure;
imshow(rgb);
R=rgb(:,:,1); %red
G=rgb(:,:,2); %green
B=rgb(:,:,3); %blue
[x,y,z]=size(rgb);
for i=1:x
    for j=1:y
        if( (R(i,j) >= 150) && (R(i,j) <=255))
            R(i,j) = 0;
            G(i,j) = 223;
            B(i,j) = 162;
        end
        if( (R(i,j) <50) && (G(i,j) < 50) && (B(i,j) < 50))
            R(i,j) = 255;
            G(i,j) = 0;
            B(i,j) = 0;
        end
        if( (R(i,j) > 90) &&(R(i,j) < 150) && (G(i,j) > 90) &&(G(i,j) < 150) && (B(i,j) > 90) &&(B(i,j) < 150))
            R(i,j) = 255;
            G(i,j) = 255;
            B(i,j) = 153;
        end
    end
end
 
% in this way
blue(:,:,1)=R(:,:);
blue(:,:,2)=G(:,:);
blue(:,:,3)=B(:,:);

 
% % another way
% for i=1:x
%     for j=1:y
%         blue(i,j,1) = R(i,j);
%         blue(i,j,2) = G(i,j);
%         blue(i,j,3) = B(i,j);
%     end
% end
 
figure;
imshow(blue);




% 
% 
% clear; close all; clc;
% %% 导入光学图片
%  
% picture_data = imread('lowdimension.jpg');
% picture_data = rgb2gray(picture_data);
% picture_data = double(picture_data);
% figure('name','颜色图像');
% image(picture_data)
% colormap(gray(256)); colorbar
% %% 画山峰，赋予高程信息，可以看做实际的位置坐标
% [x,y]=meshgrid(-4.99:0.01:5,-2.99:0.01:3);
% z = 3*(1-x).^2.*exp(-(x.^2) - (y+1).^2)- 10*(x/5 - x.^3 - y.^5).*exp(-x.^2-y.^2)- 1/3*exp(-(x+1).^2 - y.^2);
% z = 100 * abs(z);
% x = 100*(x+5);
% y = 100*(y+3);
% %% 画图
% figure('name','高程图')
% mesh(x, y,z);
% colormap(gray(256)); 
% colorbar
% figure('name','带有颜色的高程图')
% mesh(x, y,z, picture_data);%需要注意的是，颜色矩阵必须和z矩阵一样大。
% colormap(gray(256)); 
% colorbar
