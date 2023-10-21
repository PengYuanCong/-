const activityList = document.getElementById('activity-list');
const activityForm = document.getElementById('activity-form');
const activityNameInput = document.getElementById('activity-name');
const creatorNameInput = document.getElementById('creator-name');
const activityAddressInput = document.getElementById('activity-address');
const activityDateInput = document.getElementById('activity-date');
const startTimeInput = document.getElementById('start-time');

// 事件处理程序：紀錄活動
activityForm.addEventListener('submit', function(event) {
    event.preventDefault();
    const activityName = activityNameInput.value;
    const creatorName = creatorNameInput.value;
    const activityAddress = activityAddressInput.value;
    const activityDate = activityDateInput.value;
    const startTime = startTimeInput.value;

    if (activityName.trim() !== '' && creatorName.trim() !== '' && activityAddress.trim() !== '' && activityDate.trim() !== '' && startTime.trim() !== '') {
        const listItem = document.createElement('li');
        listItem.textContent = `活動名稱: ${activityName}, 創建者: ${creatorName}, 活動地址: ${activityAddress}, 活動日期: ${activityDate}, 開始時間: ${startTime}`;
        activityList.appendChild(listItem);

        // 使用Fetch API将活动属性发送到服务器
        fetch('save_activity.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                activityName,
                creatorName,
                activityAddress,
                activityDate,
                startTime
            }),
        })
        .then(response => response.text())
        .then(data => {
            // 请求成功处理
            console.log('活動已紀錄！');
        })
        .catch(error => {
            console.error('錯誤：', error);
        });
    }
});

activityList.addEventListener('click', function(event) {
    if (event.target.tagName === 'LI') {
        const activityId = event.target.getAttribute('data-activity-id'); // 活動的唯一ID

        // 使用Fetch API将收藏的活动发送到服务器
        fetch('favorite_activity.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'activityId=' + activityId,
        })
        .then(response => response.text())
        .then(data => {
            // 请求成功处理
            console.log(data);
        })
        .catch(error => {
            console.error('錯誤：', error);
        });
    }
});