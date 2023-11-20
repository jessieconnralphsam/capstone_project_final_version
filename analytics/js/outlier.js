function removeOutliers(dataArray) {
    // calculate mean and standard deviation
    //
    const mean = dataArray.reduce((acc, val) => acc + val, 0) / dataArray.length;
    const standardDeviation = Math.sqrt(dataArray.reduce((acc, val) => acc + Math.pow(val - mean, 2), 0) / dataArray.length);
  
    // Define a threshold 
    //
    const lowerThreshold = mean - 2 * standardDeviation;
    const upperThreshold = mean + 2 * standardDeviation;
  
    // Filter out values outside the threshold
    //
    const filteredData = dataArray.filter(value => value >= lowerThreshold && value <= upperThreshold);
  
    return filteredData;
  }
  
  // Example usage
  const data = [1, 2, 3, 10, 15, 100, 99, 5, 6, 7];
  const filteredData = removeOutliers(data);
  
  console.log(filteredData);
  