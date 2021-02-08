
import React, { Component} from "react";
import { withStyles } from '@material-ui/core/styles';
import TextField from '@material-ui/core/TextField';
import { render } from '../../../../../public/js/app';

const useStyles = theme => ({
  root: {
    '& > *': {
      margin: theme.spacing(1),
      width: '25ch',
    },
  },
});



class TextFields extends Component {
  constructor(props) {
    super(props);
  }
    render(){
      const {classes} = this.props;

  return (
    <div>
      <TextField onChange={this.props.textAreaHandler}  
                 value={this.props.value} name={this.props.id}  
                 id={this.props.id} label= {this.props.label}  
                 multiline ={this.props.multiline}
                 rows= {this.props.rows}
                 variant="outlined" />
      </div>
    
  );
}
}
  


export default withStyles(useStyles)(TextFields)